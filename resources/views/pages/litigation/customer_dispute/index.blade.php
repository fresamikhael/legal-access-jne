@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Customer Dispute</h1>
        @if (Session::get('message_success'))
            <div class="bg-green-200 rounded-xl p-5 text-green-600">
                {{ Session::get('message_success') }}
            </div>
        @endif
        <form class="mt-4" method="post" enctype="multipart/form-data"
            action="{{ route('customer-dispute-post') }}">
            @csrf
            <div class="grid grid-cols-2 gap-16 mb-4">
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Kasus</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="id" value="{{ $no_kasus }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal
                            Pengiriman</label>
                        <div class="flex-[4]">
                            <input type="date" id="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" name="shipping_date" requireddd>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Pengirim
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="sender_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>

                    <div id="formAddress"></div>

                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">No
                            Telepon Pengirim</label>
                        <div class="flex flex-[4]">
                            <input type="text" id="text" name="sender_phone_number"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>

                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jenis
                            Kasus</label>
                        <div class="flex-[4]">
                            <select requireddd id="countries" name="case_type"
                                class="\bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" style="display: none">-- Pilih --</option>
                                <option>Terlambat</option>
                                <option>Hilang</option>
                                <option>Rusak</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Faktor
                            Penyebab</label>
                        <div class="flex-[4]">
                            <select requireddd onchange="yesnoCheck(this);" id="countries" name="causative_factor"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" style="display: none">-- Pilih --</option>
                                <option>Alamat Tidak Jelas</option>
                                <option>Penerima Tidak Tepat</option>
                                <option>Kendala Pihak Ketiga</option>
                                <option>Pencurian</option>
                                <option>Kecelakaan</option>
                                <option>Force Majeur</option>
                                <option>Lain - Lain</option>
                            </select>
                        </div>
                    </div>
                    <div id="ifYes" style="display: none;">
                        <div class="flex">
                            <label for="text"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                            <div class="flex-[4]">
                                <textarea id="message" name="causative_factor_others" rows="4"
                                    class="  block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Penerima
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="receiver_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>
                    <div id="formAddressOptional"></div>
                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                            Pihak
                        </label>
                        <div class="flex-[4]">
                            <select name="" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <select name="" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <select name="" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <select name="" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <select name="" id=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Pilih Kode Pos</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="first_party"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan Nama Jalan" requireddd>
                        </div>
                    </div> --}}
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">No
                            Telepon Penerima</label>
                        <div class="flex flex-[4]">
                            <input type="text" id="text" name="receiver_phone_number"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>

                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Total
                            Kerugian/Klaim</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="text" id="website-admin" name="total_loss"
                                class=" rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal
                            Barang</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="text" id="website-admin" name="item_nominal"
                                class=" rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Connote/Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="text" id="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" name="connote" requireddd>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Customer</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="customer"
                                class=" bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" requireddd>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jenis
                            Kiriman</label>
                        <div class="flex-[4]">
                            <select requireddd id="countries" name="shipping_type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" style="display: none">-- Pilih --</option>
                                <option>High Value Service</option>
                                <option>Non HVS</option>
                                <option>Makanan</option>
                                <option>Dangerous Goods</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Asuransi</label>
                        <div class="flex-[4]">
                            <select requireddd onchange="assurance(this);" id="countries" name="assurance"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" style="display: none">-- Pilih --</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div id="ifAda" style="display: none;">
                        <div class="flex">
                            <label for="text"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal
                                Asuransi</label>
                            <div class="flex flex-[4]">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    Rp
                                </span>
                                <input type="text" id="website-admin" name="assurance_nominal"
                                    class=" rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" requireddd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kronologis
                    Singkat
                    Kejadian:</label>
                <textarea id="message" rows="4" name="incident_chronology"
                    class=" block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" requireddd></textarea>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="flex">
                    <label for="text"
                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bentuk
                        Kiriman</label>
                    <div class="flex-[4]">
                        <select requireddd onchange="yesnoCheck2(this);" id="countries" name="shipping_form"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" style="display: none">-- Pilih --</option>
                            <option>Dokumen</option>
                            <option>KTP</option>
                            <option>Paspor</option>
                            <option>STNK/BPKP</option>
                            <option>Pakaian</option>
                            <option>Elektronik</option>
                            <option>Makanan</option>
                            <option>Tumbuhan</option>
                            <option>Aksesoris</option>
                            <option>Lain - Lain</option>
                        </select>
                    </div>
                </div>
                {{-- <div id="ifYes2" style="display: none;"> --}}
                <div class="flex mb-4">
                    <label for="text"
                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                    <div class="flex-[4]">
                        <textarea id="message" rows="4" name="detail_shipping_form"
                            class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" requireddd></textarea>
                    </div>
                </div>
                {{-- </div> --}}

                <div class="grid grid-rows-3 grid-flow-col gap-4 mb-4">
                    <div class="row-span-10 font-medium">Bukti :</div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">1.
                                Connote*</label>
                            <div class="flex-[4]">
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_connote" type="file"
                                    requireddd>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">2.
                                Orion*</label>
                            <div class="flex-[4]">
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_orion" type="file"
                                    requireddd>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">3.
                                POD</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select onchange="pod(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesPod" style="display: none;">
                                    <input name="file_pod"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" requireddd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">4.
                                Form Kasus Sengketa Konsumen*</label>
                            <div class="flex-[4]">
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_customer_case_form"
                                    type="file" requireddd>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">5.
                                Kronologis Destinasi</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" onchange="destination(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesDestination" style="display: none;">
                                    <input name="file_destination_chronology"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" requireddd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">6.
                                Kronologis Origin</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" onchange="origin(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesOrigin" style="display: none;">
                                    <input name="file_orion_chronology"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" requireddd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">7.
                                Kronologis CS</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" onchange="cs(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesCs" style="display: none;">
                                    <input name="file_cs_chronology"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" requireddd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">8.
                                Surat Customer atau Somasi</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" onchange="asd(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesAsd" style="display: none;">
                                    <input name="file_subpoena"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" requireddd>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">9.
                                Surat Kuasa</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" onchange="kuasa(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesKuasa" style="display: none;">
                                    <input name="file_procuration"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" requireddd>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">10.
                                Dokumen Tambahan</label>
                            <div class="flex-[4]">
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_other_document"
                                    type="file" requireddd>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="flex justify-end items-center">
                {{-- <input type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                    name="btnADD" id="btnADD" value="Submit"
                    onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();" /> --}}
                <button type="submit" onclick="checkbutton();"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Submit</button>
                {{-- <button type="button"
                    class="">Submit</button> --}}
            </div>
        </form>
    </div>

    <script type="text/babel">
        function FormAddress() {
                                                                                        const [regency, setRegency] = React.useState([])
                                                                                        const [district, setDistrict] = React.useState([])
                                                                                        const [village, setVillage] = React.useState([])

                                                                                        const [form, setForm] = React.useState({
                                                                                            sender_province: "",
                                                                                            sender_regency: "",
                                                                                            sender_district: "",
                                                                                            sender_village: "",
                                                                                            sender_zip_code: "",
                                                                                            sender_address: "",
                                                                                        })

                                                                                        const inputProvinceChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            axios.get(`/api/regencies/${value}`).then(res => {
                                                                                                if(res.data.meta.code === 200) {
                                                                                                    setRegency(res.data.data)
                                                                                                }
                                                                                            })

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        const inputRegencyChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            axios.get(`/api/districts/${value}`).then(res => {
                                                                                                if(res.data.meta.code === 200) {
                                                                                                    setDistrict(res.data.data)
                                                                                                }
                                                                                            })

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        const inputDistrictChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            axios.get(`/api/villages/${value}`).then(res => {
                                                                                                if(res.data.meta.code === 200) {
                                                                                                    setVillage(res.data.data)
                                                                                                }
                                                                                            })

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        const inputChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        return (
                                                                                            <div class="flex flex-col gap-4">
                                                                                                <div class="flex">
                                                                                                    <label for="sender_province"
                                                                                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                                                                                                        Pihak
                                                                                                    </label>
                                                                                                    <div class="flex-[4]">
                                                                                                        <select onChange={ inputProvinceChange } name="sender_province" id="sender_province"
                                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                            <option value="" selected disabled>Pilih Provinsi</option>
                                                                                                            @foreach ($province as $row)
                                                                                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                {form.sender_province && (
                                                                                                    <div class="flex">
                                                                                                        <label for="sender_regency"
                                                                                                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                        </label>
                                                                                                        <div class="flex-[4]">
                                                                                                            <select onChange={ inputRegencyChange } name="sender_regency" id="sender_regency"
                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                                <option value="" selected disabled>Pilih Kab/Kota</option>
                                                                                                                { regency.map((value, index) => {
                                                                                                                    return (
                                                                                                                        <option key={index} value={value.id}>{value.name}</option>
                                                                                                                    )
                                                                                                                }) }
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}

                                                                                                {form.sender_regency && (
                                                                                                    <div class="flex">
                                                                                                        <label for="sender_district"
                                                                                                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                        </label>
                                                                                                        <div class="flex-[4]">
                                                                                                            <select onChange={ inputDistrictChange } name="sender_district" id="sender_district"
                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                                <option value="" selected disabled>Pilih Kecamatan</option>
                                                                                                                { district.map((value, index) => {
                                                                                                                    return (
                                                                                                                        <option key={index} value={value.id}>{value.name}</option>
                                                                                                                    )
                                                                                                                }) }
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}

                                                                                                {form.sender_district && (
                                                                                                    <div class="flex">
                                                                                                        <label for="sender_village"
                                                                                                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                        </label>
                                                                                                        <div class="flex-[4]">
                                                                                                            <select onChange={ inputChange } name="sender_village" id="sender_village"
                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                                <option value="" selected disabled>Pilih Kelurahan</option>
                                                                                                                { village.map((value, index) => {
                                                                                                                    return (
                                                                                                                        <option key={index} value={value.id}>{value.name}</option>
                                                                                                                    )
                                                                                                                }) }
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}

                                                                                                {form.sender_village && (
                                                                                                    <div class="flex flex-col gap-4">
                                                                                                        <div class="flex">
                                                                                                            <label for="sender_zip_code"
                                                                                                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                            </label>
                                                                                                            <div class="flex-[4]">
                                                                                                                <input type="text" id="sender_zip_code" name="sender_zip_code"
                                                                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                                                    placeholder="Masukkan Kode Pos" requireddd/>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="flex">
                                                                                                            <label for="sender_address"
                                                                                                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                            </label>
                                                                                                            <div class="flex-[4]">
                                                                                                                <textarea id="sender_address" name="sender_address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}
                                                                                            </div>
                                                                                        )
                                                                                    }

                                                                                    ReactDOM.render(<FormAddress />,document.getElementById('formAddress'))

                                                                                    function FormAddressOptional() {
                                                                                        const [regency, setRegency] = React.useState([])
                                                                                        const [district, setDistrict] = React.useState([])
                                                                                        const [village, setVillage] = React.useState([])

                                                                                        const [form, setForm] = React.useState({
                                                                                            receiver_province: "",
                                                                                            receiver_regency: "",
                                                                                            receiver_district: "",
                                                                                            receiver_village: "",
                                                                                            receiver_zip_code: "",
                                                                                            receiver_address: "",
                                                                                        })

                                                                                        const inputProvinceChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            axios.get(`/api/regencies/${value}`).then(res => {
                                                                                                if(res.data.meta.code === 200) {
                                                                                                    setRegency(res.data.data)
                                                                                                }
                                                                                            })

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        const inputRegencyChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            axios.get(`/api/districts/${value}`).then(res => {
                                                                                                if(res.data.meta.code === 200) {
                                                                                                    setDistrict(res.data.data)
                                                                                                }
                                                                                            })

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        const inputDistrictChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            axios.get(`/api/villages/${value}`).then(res => {
                                                                                                if(res.data.meta.code === 200) {
                                                                                                    setVillage(res.data.data)
                                                                                                }
                                                                                            })

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        const inputChange = (e) => {
                                                                                            const name = e.target.name
                                                                                            const value = e.target.value

                                                                                            setForm({ ...form, [name]: value })
                                                                                        }

                                                                                        return (
                                                                                            <div class="flex flex-col gap-4">
                                                                                                <div class="flex">
                                                                                                    <label for="receiver_province"
                                                                                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                                                                                                        Pihak
                                                                                                    </label>
                                                                                                    <div class="flex-[4]">
                                                                                                        <select onChange={ inputProvinceChange } name="receiver_province" id="receiver_province"
                                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                            <option value="" selected disabled>Pilih Provinsi</option>
                                                                                                            @foreach ($province as $row)
                                                                                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                {form.receiver_province && (
                                                                                                    <div class="flex">
                                                                                                        <label for="receiver_regency"
                                                                                                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                        </label>
                                                                                                        <div class="flex-[4]">
                                                                                                            <select onChange={ inputRegencyChange } name="receiver_regency" id="receiver_regency"
                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                                <option value="" selected disabled>Pilih Kab/Kota</option>
                                                                                                                { regency.map((value, index) => {
                                                                                                                    return (
                                                                                                                        <option key={index} value={value.id}>{value.name}</option>
                                                                                                                    )
                                                                                                                }) }
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}

                                                                                                {form.receiver_regency && (
                                                                                                    <div class="flex">
                                                                                                        <label for="receiver_district"
                                                                                                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                        </label>
                                                                                                        <div class="flex-[4]">
                                                                                                            <select onChange={ inputDistrictChange } name="receiver_district" id="receiver_district"
                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                                <option value="" selected disabled>Pilih Kecamatan</option>
                                                                                                                { district.map((value, index) => {
                                                                                                                    return (
                                                                                                                        <option key={index} value={value.id}>{value.name}</option>
                                                                                                                    )
                                                                                                                }) }
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}

                                                                                                {form.receiver_district && (
                                                                                                    <div class="flex">
                                                                                                        <label for="receiver_village"
                                                                                                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                        </label>
                                                                                                        <div class="flex-[4]">
                                                                                                            <select onChange={ inputChange } name="receiver_village" id="receiver_village"
                                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                                                <option value="" selected disabled>Pilih Kelurahan</option>
                                                                                                                { village.map((value, index) => {
                                                                                                                    return (
                                                                                                                        <option key={index} value={value.id}>{value.name}</option>
                                                                                                                    )
                                                                                                                }) }
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}

                                                                                                {form.receiver_village && (
                                                                                                    <div class="flex flex-col gap-4">
                                                                                                        <div class="flex">
                                                                                                            <label for="receiver_zip_code"
                                                                                                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                            </label>
                                                                                                            <div class="flex-[4]">
                                                                                                                <input type="text" id="receiver_zip_code" name="receiver_zip_code"
                                                                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                                                    placeholder="Masukkan Kode Pos" requireddd/>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="flex">
                                                                                                            <label for="receiver_address"
                                                                                                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                                                            </label>
                                                                                                            <div class="flex-[4]">
                                                                                                                <textarea id="receiver_address" name="receiver_address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                )}
                                                                                            </div>
                                                                                        )
                                                                                    }

                                                                                    ReactDOM.render(<FormAddressOptional />,document.getElementById('formAddressOptional'))
                                                                                </script>

    <script>
        function checkbutton() {
            $('input[type=submit]').one('submit', function() {
                $(this).attr('disabled', 'disabled');
            });
        }

        function yesnoCheck(that) {
            if (that.value == "Lain - Lain") {
                // alert("check");
                document.getElementById("ifYes").style.display = "block";
            } else {
                document.getElementById("ifYes").style.display = "none";
            }
        }

        function assurance(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifAda").style.display = "block";
            } else {
                document.getElementById("ifAda").style.display = "none";
            }
        }

        function pod(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesPod").style.display = "flex";
            } else {
                document.getElementById("ifYesPod").style.display = "none";
            }
        }

        function destination(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesDestination").style.display = "flex";
            } else {
                document.getElementById("ifYesDestination").style.display = "none";
            }
        }

        function origin(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesOrigin").style.display = "flex";
            } else {
                document.getElementById("ifYesOrigin").style.display = "none";
            }
        }

        function cs(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesCs").style.display = "flex";
            } else {
                document.getElementById("ifYesCs").style.display = "none";
            }
        }

        function asd(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesAsd").style.display = "flex";
            } else {
                document.getElementById("ifYesAsd").style.display = "none";
            }
        }

        function kuasa(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesKuasa").style.display = "flex";
            } else {
                document.getElementById("ifYesKuasa").style.display = "none";
            }
        }
    </script>
@endsection
