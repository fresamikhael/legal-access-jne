@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Lease Check</h1>

        <div class="grid grid-cols-1 gap-16 mb-4">
            <div class="flex flex-col gap-4">
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor Pengajuan</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-3 ml-20 gap-2">

                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Pihak Pertama</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Pihak Kedua</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Pihak Ketiga (apabila ada)</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Draft Perjanjian</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Addendum ke</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal Perjanjian</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat Objek Sewa</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Regional</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal Mulai Perjanjian</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal Berakhir Perjanjian</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Deposit</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex">
                    <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal Deposit</label>
                    <div class="flex-[4]">
                        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                    </div>
                    <div class="grid grid-cols-2 ml-4 gap-2">
                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="" class="">
                            <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col mb-4">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Poin-Poin Khusus Lainnya Yang Dicantumkan Dalam Perjanjian Sesuai Kesepakatan Para Pihak:</label>
            <textarea id="message" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
        </div>

        <div class="flex flex-col gap-4 mb-4">
            <div class="flex">
                <label for="text" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tipe Landlord</label>
                <div class="flex-[12]">
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>-- Pilih --</option>
                        <option>Perorangan</option>
                        <option>Badan Hukum</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                <div class="row-span-21 font-medium">Alat Bukti :</div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Disposisi Persetujuan Direksi</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Internal Memo</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kartu Identitas Pemilik Hak *</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor Pokok Wajib Pajak Pemilik *</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kartu Keluarga *</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Buku Nikah / Akta Nikah *</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">KTP Direksi **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Akta Pendirian dan Perubahan Terakhir **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">SK Menkumham **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin Usaha OSS **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor Induk Berusaha (NIB) **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor Pokok Wajib Pajak Perusahaan (NPWP) **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>
                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin Lokasi OSS **</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Sertipikat / Girik</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin Mendirikan Bangunan</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">SPPT & STTS (PBB)</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kwitansi DP</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kwitansi Pelunasan</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Asli Surat Kuasa</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Perjanjian Sewa Sebelumnya</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex">
                        <label for="date" class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Surat Kuasa Direksi</label>
                        <div class="flex-[4]">
                            <input class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                        </div>

                        <div class="grid grid-cols-3 ml-4 gap-2">
                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                    <i class="fas fa-download"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>

                            <form action="" class="">
                                <button type="button" class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                <div class="col-start-2 col-span-4 -mt-4">
                    <div class="flex">
                        <label for="text" class="flex items-center flex-[3] mb-2 text-md font-light text-gray-900 dark:text-gray-300">* Jika Pemilik Perorangan</label>
                    </div>
                    <div class="flex">
                        <label for="text" class="flex items-center flex-[3] mb-2 text-md font-light text-gray-900 dark:text-gray-300">** Jika Pemilik Badan Hukum dan Badan Usaha</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col mb-4 -mt-20">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Reason If Return:</label>
            <textarea id="message" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
        </div>

        <div class="flex justify-end items-center">
            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Return</button>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Process</button>
        </div>
    </div>
@endsection
