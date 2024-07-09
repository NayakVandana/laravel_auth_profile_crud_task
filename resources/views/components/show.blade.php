<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between h-16">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Job detail
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
                            <div class="my-10">
                                <h1 class="text-center text-3xl font-bold"></h1>

                                <div class="my-2">
                                    <label for="type" class="text-lg font-medium text-gray-900">Title</label>
                                    <p class="mt-1 text-sm text-gray-600">{{ $Task->title }}</p>
                                </div>

                                <div class="my-2 ">
                                    <label for="" class="text-lg font-medium text-gray-900">Status</label>
                                    <p class="mt-1 text-sm text-gray-600">{{$Task->title }}</p>
                                </div>
                                <div class="my-2">
                                    <label for="" class="text-lg font-medium text-gray-900">Description</label>
                                    <p class="job-description-detail mt-1 text-sm text-gray-600">
                                        {!! $Task->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
