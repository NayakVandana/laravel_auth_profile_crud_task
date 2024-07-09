<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
  

    public function show()
    {
        $Task = Task::orderBy('id', 'desc')->get();
        $total = Task::count();
        return view('dashboard', compact(['Task', 'total']));
    }

    public function create()
    {
        return view('components.create');
    }
 
    public function save(Request $request)
    {
        
        $validatedData = $request->validate([
            'status' => 'nullable', 
            'title' => 'required', 
            'description' => 'required',             
        ]);        

        $validatedData['created_by'] = Auth::user()->id;

        $task = Task::create($validatedData);
    if ($task) {
       
        session()->flash('success', 'Task Added Successfully');
        
        return redirect()->route('dashboard');
    } else {
        
        session()->flash('error', 'Failed to Add task');
        
        return redirect()->route('create');
    }
    }
    public function edit($id)
    {
        $Task = Task::findOrFail($id);
        return view('components.update', compact('Task'));
    }

    public function view($id)
    {
        $Task = Task::findOrFail($id);
        return view('components.show', compact('Task'));
    }
 
    public function delete($id)
    {
        $Task = Task::findOrFail($id)->delete();
        if ($Task) {
            session()->flash('success', 'Task Deleted Successfully');
            return redirect(route('dashboard'));
        } else {
            session()->flash('error', 'Task Not Delete successfully');
            return redirect(route('dashboard'));
        }
    }
 
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'status' => 'required', 
        'title' => 'required', 
        'description' => 'required', 
        
    ]);

    

    if($validatedData){

        $Task = Task::findOrFail($id);

        $Task->update([
            'status' => $request->status,
            'title' => $request->title,
            'description' => $request->description,
                
        ]);
    }
    
    if ($Task) {
        // Flash success message to session and redirect
        session()->flash('success', 'Task updated successfully');
        return redirect()->route('dashboard');
    } else {
        // Flash error message to session and redirect
        session()->flash('error', 'Failed to update task');
        return redirect()->route('update', $id); // Redirect to the update form with the ID
    }
}
}