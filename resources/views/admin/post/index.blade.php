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
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">Posts</h1>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <a href="{{ route('post.create') }}"
                                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add
                                    Post</a>
                            </div>
                        </div>
                        <div class="mt-8 flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                    Title
                                                </th>
                                                <th scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Description</th>
                                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="font-medium text-gray-900">
                                                                    {{ $post->title }}</div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p>
                                                            {{ Str::words($post->description, $limit = 10, $end = '...') }}
                                                            @if (Str::length($post->description) > $limit)
                                                                <a href="{{ route('post.show', $post->id) }}" class="text-indigo-600">Read
                                                                    More</a>
                                                            @endif
                                                        </p>
                                                    </td>

                                                    <td
                                                        class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                        <div class="flex">

                                                            <a href="{{ route('post.show', $post->id) }}"
                                                                class="text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 rounded-md
                                                                px-3 py-2 text-center text-sm font-semibold mx-1">View</a>

                                                            <a href="{{ route('post.edit', $post->id) }}"
                                                                class="text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 rounded-md
                                                                px-3 py-2 text-center text-sm font-semibold mx-1">Edit</a>

                                                            <form action="{{ route('post.destroy', $post->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 rounded-md
                                                                    px-3 py-2 text-center text-sm font-semibold mx-1">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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

</x-app-layout>
