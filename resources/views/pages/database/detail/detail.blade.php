@extends('layouts.admin')

@section('content')
    <div class="p-5 grid grid-cols-[2fr_0.5fr] gap-10">
        <div class="border border-[#D0391C]">
            <div class="bg-[#D0391C] p-4 text-white flex gap-2 items-center border-b border-b-[#0D2B70]">
                <i class="fa-solid fa-align-left"></i>
                <span>Detail Peraturan</span>
            </div>

            <div class="p-5">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="text-sm text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Nama Peraturan
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->name }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Tipe Peraturan
                                </th>
                                <td class="px-6 py- 4">
                                    {{ $regulation->type }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Entitas
                                </th>
                                <td class="px-6 py- 4">
                                    {{ $regulation->entity }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Nomor Peraturan
                                </th>
                                <td class="px-6 py- 4">
                                    {{ $regulation->number }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700     bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Tahun Peraturan
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->year }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Tentang
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->title }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700     bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Tanggal Ditetapkan
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->set_date }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Tanggal Diundangkan
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->promulgated_date }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700     bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Tanggal Berlaku
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->valid_date }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Sumber
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->source }}
                                </td>
                            </tr>
                            <tr class="text-sm text-gray-700 dark:text-gray-400">
                                <th class="w-[20%] px-6 py-3 text-right">
                                    Status Peraturan
                                </th>
                                <td class="px-6 py-4">
                                    {{ $regulation->status }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="border border-[#D0391C]">
            <div class="bg-[#D0391C] p-4 text-white flex gap-2 items-center border-b border-b-[#0D2B70]">
                <i class="fa-solid fa-folder"></i>
                <span>Dokumen</span>
            </div>

            <div class="p-5">
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($regulation->files as $data)
                        <a href="{{ asset($data->file) }}" target="__blank" class="text-[100px] flex items-center justify-center">
                            <i class="fa-solid fa-file-arrow-down"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
