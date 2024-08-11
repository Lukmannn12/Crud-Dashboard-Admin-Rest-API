<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Experience') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data" class="w-full">
                    @csrf
                    
                    <div class="mt-5">
                        <label for="company" class="text-gray-700 text-xs font-bold mb-2">
                            Company
                        </label>
                        <input type="text" placeholder="Company" value="{{ old('company') ?? $item->company }}" name="company" class="w-full bg-gray-200 text-sm rounded-md">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mt-5">
                            <label for="date" class="text-gray-700 text-xs font-bold mb-2">
                                Date
                            </label>
                            <input type="text" placeholder="Date" value="{{ old('date') ?? $item->date }}" name="date" class="w-full bg-gray-200 text-sm rounded-md">
                        </div>

                        <div class="mt-5">
                            <label for="imagePath" class="text-gray-700 text-xs font-bold mb-2">
                                Image Path
                            </label>
                            <input type="file" value="{{ old('imagePath') }}" name="imagePath" class="w-full bg-gray-200 text-sm rounded-md px-3 py-2">
                        </div>

                        <div class="mt-5">
                            <label for="position" class="text-gray-700 text-xs font-bold mb-2">
                                Position
                            </label>
                            <input type="text" placeholder="Position" value="{{ old('position') ?? $item->position }}" name="position" class="w-full bg-gray-200 text-sm rounded-md px-3 py-2">
                        </div>

                        <div class="mt-5">
                            <label for="jobdesc" class="text-gray-700 text-xs font-bold mb-2">
                                Job Description
                            </label>
                            <input type="text" placeholder="Job Description" value="{{ old('jobdesc') ?? $item->jobdesc }}" name="jobdesc" class="w-full bg-gray-200 text-sm rounded-md px-3 py-2">
                        </div>

                        <div class="mt-5">
                            <label for="tag" class="text-gray-700 text-xs font-bold mb-2">
                                Tag
                            </label>
                            <input type="text" placeholder="Tag" value="{{ old('tag') ?? $item->tag }}" name="tag" class="w-full bg-gray-200 text-sm rounded-md px-3 py-2">
                        </div>
                    </div>

                    <div class="mt-5 flex">
                        <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white">
                            Update
                        </button>
                        <a href="/dashboard/service" class="bg-red-500 px-3 py-2 rounded-md text-white ms-2">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
