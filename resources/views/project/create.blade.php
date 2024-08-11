<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    <div class="mt-5">
                        <label for="title" class="text-gray-700 text-xs font-bold mb-2">
                            title
                        </label>
                        <input type="text" placeholder="title" value="{{ old('title') }}" name="title" class="w-full
                        bg-gray-200 text-sm rounded-md">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-5">
                            <label for="overview" class="text-gray-700 text-xs font-bold mb-2">
                                Overview
                            </label>
                            <input type="text" placeholder="overview" value="{{ old('overview') }}" name="overview" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                        <div class="mt-5">
                            <label for="tipografi" class="text-gray-700 text-xs font-bold mb-2">
                                Tipografi
                            </label>
                            <input type="text" placeholder="tipografi" value="{{ old('tipografi') }}" name="tipografi" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-5">
                            <label for="content" class="text-gray-700 text-xs font-bold mb-2">
                                Content
                            </label>
                            <input type="text" placeholder="content" value="{{ old('content') }}" name="content" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                        <div class="mt-5">
                            <label for="color" class="text-gray-700 text-xs font-bold mb-2">
                                Color
                            </label>
                            <input type="text" placeholder="color" value="{{ old('color') }}" name="color" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-5">
                            <label for="client" class="text-gray-700 text-xs font-bold mb-2">
                                Client
                            </label>
                            <input type="text" placeholder="client" value="{{ old('client') }}" name="client" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                        <div class="mt-5">
                            <label for="date" class="text-gray-700 text-xs font-bold mb-2">
                                Date
                            </label>
                            <input type="text" placeholder="date" value="{{ old('date') }}" name="date" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                        <div class="mt-5">
                            <label for="url" class="text-gray-700 text-xs font-bold mb-2">
                                Url
                            </label>
                            <input type="text" placeholder="url" value="{{ old('url') }}" name="url" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-5">
                            <label for="service" class="text-gray-700 text-xs font-bold mb-2">
                                Service
                            </label>
                            <select class="w-full bg-gray-200 text-sm rounded-md" name="id_service">
                                <option value="1">Web Developer</option>
                                <option value="2">App Developer</option>
                            </select>
                        </div>
                        <div class="mt-5">
                            <label for="tag" class="text-gray-700 text-xs font-bold mb-2">
                                Tag
                            </label>
                            <input type="text" placeholder="tag" value="{{ old('tag') }}" name="tag" class="w-full
                        bg-gray-200 text-sm rounded-md">
                        </div>
                        <div class="mt-5">
                            <label for="imagePath" class="text-gray-700 text-xs font-bold mb-2">
                                Image_path
                            </label>
                            <input type="file"  value="{{ old('imagePath') }}" name="imagePath" class="w-full
                        bg-gray-200 text-sm rounded-md px-3 py-2">
                        </div>
                        <div class="mt-5 flex justify-between">
                            <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white">
                                Create
                            </button>
                            <a href="/dashboard/project" class="bg-red-500 px-3 py-2 rounded-md text-white">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>