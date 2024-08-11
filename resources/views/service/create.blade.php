<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    <div class="mt-5">
                        <label for="name" class="text-gray-700 text-xs font-bold mb-2">
                            name
                        </label>
                        <input type="text" placeholder="name" value="{{ old('name') }}" name="name" class="w-full
                        bg-gray-200 text-sm rounded-md">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
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
                        <div class="mt-5 flex ">
                            <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white">
                                Create
                            </button>
                            <a href="/dashboard/service" class="bg-red-500 px-3 py-2 rounded-md text-white ms-2">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>