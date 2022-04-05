@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Tambah Data Baru</h1>

        @if (Session::get('message_success'))
            <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                    {{ Session::get('message_success') }}
                </div>
            </div>
        @endif

        <form class="mt-4" method="POST" enctype="multipart/form-data" action="{{ route('database-store') }}">
            @csrf

            <div class="grid grid-rows-6 grid-flow-col">
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Peraturan</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="name" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tipe
                            Peraturan</label>
                        <div class="flex-[6]">
                            <select name="type" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="UU">UU</option>
                                <option value="PERPU">PERPU</option>
                                <option value="PP">PP</option>
                                <option value="PERPRES">PERPRES</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Entitas</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="entity" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Peraturan</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="number" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tahun
                            Peraturan</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="year" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tentang</label>
                        <div class="flex-[6]">
                            <textarea name="title" id="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                cols="1" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-6 grid-flow-col gap-4 mt-4">
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Ditetapkan
                            Tanggal</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="set_date" type="date">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Diundangkan
                            Tanggal</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="promulgated_date" type="date">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Berlaku
                            Tanggal</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="valid_date" type="date">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Sumber</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="source" type="text">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Status
                            Peraturan</label>
                        <div class="flex-[6]">
                            <select name="status" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Upload
                            File</label>
                        <div class="flex-[6]">
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" name="file" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center mt-5">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Upload</button>
            </div>
        </form>
    </div>
@endsection
