@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Regulasi Normatif</h1>
        <form class="mt-4" method="POST" enctype="multipart/form-data"
            action="{{ route('regulation-internal-store') }}">
            @csrf

            <div class="grid grid-rows-5 grid-flow-col gap-4 mb-4">
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Regulasi</label>
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
                            Regulasi</label>
                        <div class="flex-[6]">
                            <select name="type" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Undang-undang">Undang-undang</option>
                                <option value="Peraturan Pemerintah">Peraturan Pemerintah</option>
                                <option value="Peraturan Menteri">Peraturan Menteri</option>
                                <option value="PERDA Provinsi/Kota">PERDA Provinsi/Kota</option>
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
            <div class="flex justify-end items-center -mt-20">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Upload</button>
            </div>
        </form>
    </div>
@endsection
