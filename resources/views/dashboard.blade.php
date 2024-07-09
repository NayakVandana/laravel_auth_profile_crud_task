<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between h-16">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                To do list
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">

                    <div class="my-5">
                        <div class="container mx-auto">
                            @if (session()->has('success'))
                                <div class="bg-green-500 text-black px-4 py-2">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="flex justify-between items-center bg-gray-200 p-5 my-5 rounded-md">
                                <div>
                                    <h1 class="text-xl text-semibold">Task  ( {{ $total }} )</h1>
                                </div>
                                <div>
                                    <a href="{{ route('create') }}"
                                        class="px-5 py-2 bg-green-500 rounded-md text-white text-lg shadow-md">Add
                                        New</a>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table
                                                class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                                <thead class="bg-gray-100 dark:bg-white">
                                                    <tr>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                            #
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                            Title 
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                            Status
                                                        </th>
                                                      
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                            Show
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                            Edit
                                                        </th>
                                                        <th scope="col"
                                                            class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                            Delete
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                                    @forelse ($Task as $index => $Task)
                                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                            
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                                {{ $index + 1 }}</td>
                                                                <td
                                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                {{ $Task->title }}
                                                            </td>
                                                            <td
                                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                {{ $Task->status }}
                                                            </td>
                                                          
                                                      
                                                        
                                                            <td
                                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                <a href="{{ route('show', ['id' => $Task->id]) }}"
                                                                    class="px-5 py-2 bg-orange-400 rounded-md text-white text-lg shadow-md">Show</a>
                                                            </td>
                                                            <td
                                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                <a href="{{ route('edit', ['id' => $Task->id]) }}"
                                                                    class="px-5 py-2 bg-blue-500 rounded-md text-white text-lg shadow-md">Edit</a>
                                                            </td>
                                                            <td
                                                                class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                                <a href="{{ route('delete', ['id' => $Task->id]) }}"
                                                                    class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="8">
                                                                <h2 class="text-center py-10">Product Not found</h2>
                                                            </td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
