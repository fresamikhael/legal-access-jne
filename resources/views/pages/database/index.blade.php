@extends('layouts.admin')

@section('content')
    <div class="p-5 grid grid-cols-[0.5fr_2fr] gap-10">
        <div class="border border-[#D0391C]">
            <div class="bg-[#D0391C] p-4 text-white flex gap-2 items-center border-b border-b-[#0D2B70]">
                <i class="fa-solid fa-align-left"></i>
                <span>Pencarian</span>
            </div>

            <div class="p-5">
                <form action="{{ route('database') }}" method="GET">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih Jenis Peraturan</label>
                        <select id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">-- Semua Peraturan --</option>
                            <option value="UU">UU</option>
                            <option value="PERPU">PERPU</option>
                            <option value="PP">PP</option>
                            <option value="PERPRES">PERPRES</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor Peraturan</label>
                        <input type="text" id="number" name="number" value="{{ request('number') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun Peraturan</label>
                        <input type="text" id="year" name="year" value="{{ request('year') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tentang</label>
                        <input type="text" id="title" name="title" value="{{ request('title') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cari</button>
                </form>
            </div>
        </div>

        <div class="border border-[#D0391C]">
            <div class="bg-[#D0391C] p-4 text-white flex gap-2 items-center border-b border-b-[#0D2B70]">
                <i class="fa-solid fa-align-left"></i>
                <span>Data Peraturan</span>
            </div>

            <div class="p-5">
                <span class="flex items-center justify-end mb-4 font-light text-sm">
                    Ditampilkan {{ $regulation->firstItem() }} - {{ $regulation->lastItem() }} dari {{ $regulation->total() }} Data Peraturan
                </span>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tahun Peraturan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Peraturan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tentang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Aksi</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($regulation->count())
                                @foreach ($regulation as $row)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            {{ $regulation->firstItem()+$loop->index }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $row->year }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('database.detail', [$row->id]) }}" class="text-red-500 hover:text-black hover:underline">{{ Str::limit($row->name, 40, '...') }}</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ Str::limit($row->title, 100, '...') }}
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            @foreach ($row->files as $data)
                                                <a href="{{ asset($data->file) }}" target="_blank" class="">
                                                    <i class="fa-solid fa-file-arrow-down"></i>
                                                </a>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <th scope="row" class="px-6 py-4 font-medium text-gray-800 dark:text-white whitespace-nowrap">
                                    Data yang dicari tidak tersedia
                                </th>
                            @endif
                        </tbody>
                    </table>
                </div>

                {{ $regulation->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
@endsection
