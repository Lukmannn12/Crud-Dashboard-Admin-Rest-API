<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <a href="{{ route('project.create') }}" class="bg-blue-500 px-3 py-3 rounded-md text-white font-semibold text-xl">
                        Create
                    </a>
                </div>
                <div class="bg-gray-200 bg-opacity-25 md:grid-cols-2 gap-6 lg:gap-8 p6 lg:p-8">
                    <div class="bg-white mt-10">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="border px-6 py-4">ID</th>
                                    <th class="border px-6 py-4">Title</th>
                                    <th class="border px-6 py-4">Gambar</th>
                                    <th class="border px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($project as $item)
                                <tr class="text-center">
                                    <td class="border px-6 py-4">{{ $item->id }}</td>
                                    <td class="border px-6 py-4">{{ $item->title }}</td>
                                    <td class="border px-6 py-4">
                                    <img src="{{ asset('storage/' . $item->imagePath) }}" alt="{{ $item->title }}" class="w-20 h-20 object-cover mx-auto block">
                                    </td>
                                    <td class="border px-6 py-4">
                                        <a href="{{ route('project.edit', $item->id)}}" class="inline-block bg-green-500 px-2 py-2 rounded-md text-white">
                                            Edit
                                        </a>
                                        <form action="{{ route('project.destroy', $item->id) }}" 
                                        method="POST" class="inline-block">
                                        {!! method_field('delete'). csrf_field() !!}
                                            <button type="submit" class="inline-block bg-red-500 px-2 py-2 rounded-md text-white">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan="5" class="border text-center p-5">
                                        Data Tidak ditemukan
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
</x-app-layout>
