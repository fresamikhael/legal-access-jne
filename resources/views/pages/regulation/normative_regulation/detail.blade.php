@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Regulasi Normatif</h1>

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

        <div class="grid grid-rows-5 grid-flow-col gap-4">
            <div class="col-span-2">
                <div class="flex">
                    <label for="date"
                        class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                        Regulasi</label>
                    <div class="flex-[6]">
                        <p>{{ $data->name }}</p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex">
                    <label for="date"
                        class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tipe
                        Regulasi</label>
                    <div class="flex-[6]">
                        <p>{{ $data->type }}</p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="flex">
                    <label for="date"
                        class="flex items-center flex-[4] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Upload
                        File</label>
                    <div class="flex-[6]">
                        <a href="{{ route('download-Regulation', substr($data->file, 5)) }}" style="font-size:24px ">
                            <div
                                class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Download
                                <i class="fa fa-download"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
