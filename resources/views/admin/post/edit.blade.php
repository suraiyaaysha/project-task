<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="sm:flex sm:items-center border-b mb-4">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Post Details</h1>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a href="{{ route('post.index') }}"
                                class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-2">Back
                                to List</a>
                        </div>
                    </div>

                    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data"
                        class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                        @csrf
                        @method('PUT')

                        <div class="px-4 py-6 sm:p-8">
                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="title"
                                        class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                    <div class="mt-2">
                                        <div
                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" name="title" id="title"
                                                value="{{ $post->title }}"
                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                placeholder="Your title here">
                                        </div>
                                    @error('title')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="description"
                                        class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                    <div class="mt-2">
                                        <textarea id="description" name="description" rows="3"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $post->description }}</textarea>
                                    </div>
                                    @error('description')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                            <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
