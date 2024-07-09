<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between h-16">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Update Job
            </h2>
            <div class="mr-5">
                <a href="{{ route('dashboard') }}"
                    class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md ">Go Back</a>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="my-10">
                        <div class="">
                            <div class="my-3">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="my-2">
                                        <label for="" class="block font-medium text-sm text-gray-700">Title</label>
                                        <input type="text" value="{{ $Task->title }}" name="title"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
                                            id="">
                                        @error('title')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                  
                                
                                    <div class="my-2">
                                        <label for=""
                                            class="block font-medium text-sm text-gray-700">Description</label>
                                        <textarea name="description" id="description"
                                            class="description border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">{!! $Task->description !!}</textarea>
                                        @error('description')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="my-2">
                                        <label for="status"
                                            class="block font-medium text-sm text-gray-700">Type</label>
                                        <select name="status" id="status"
                                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                                            <option value="Pending"
                                                {{ $Task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Completed" {{ $Task->status == 'Completed' ? 'selected' : '' }}>
                                                Completed</option>
                                         
                                        </select>
                                        @error('status')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                              
                                    <button
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
