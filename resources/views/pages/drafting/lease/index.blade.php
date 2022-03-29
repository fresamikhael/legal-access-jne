@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Lease</h1>

        <form class="mt-4" method="POST" enctype="multipart/form-data" action="{{ route('lease-post') }}">
            @csrf

            <div class="grid grid-cols-2 gap-16 mb-4">
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="id"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Pengajuan</label>
                        <div class="flex-[4]">
                            <input type="text" id="id" name="id" value="{{ $no_kasus }}" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="landlord_name"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama Landlord</label>
                        <div class="flex-[4]">
                            <input type="text" id="landlord_name" name="landlord_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>

                    <div id="formAddress"></div>

                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Draft
                            Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="agreement_draft"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    {{-- <div class="flex">
                        <label for="text"
                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Addendum
                        ke</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="addendum"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                        </div>
                    </div> --}}
                    <div class="flex">
                        <label for="type"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jenis</label>
                        <div class="flex-[4]">
                            <select required id="type" name="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>-- Pilih --</option>
                                <option value="Baru">Baru</option>
                                <option value="Perpanjangan">Perpanjangan</option>
                                <option value="Addendum">Addendum</option>
                                <option value="Pembaharuan">Pembaharuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="regional"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Regional</label>
                        <div class="flex-[4]">
                            <select required id="regional" name="regional"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>-- Pilih --</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bodetabekarcil">Bodetabekarcil</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah & DIY">Jawa Tengah & DIY</option>
                                <option value="JTBNN">JTBNN</option>
                                <option value="Sumatera Bagian Utara">Sumatera Bagian Utara</option>
                                <option value="Sumatera Bagian Selatan">Sumatera Bagian Selatan</option>
                                <option value="Kalimantan">Kalimantan</option>
                                <option value="Sulampapua">Sulampapua</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="rental_value"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nilai
                            Sewa</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input required type="text" id="rental_value" name="rantal_value"
                                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="">
                        </div>
                    </div>

                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                            Objek Sewa</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="rental_address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}

                    <div id="formObject"></div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="landlord_name_optional"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama Landlord (Optional)</label>
                        <div class="flex-[4]">
                            <input type="text" id="landlord_name_optional" name="landlord_name_optional"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>

                    <div id="formAddressOptional"></div>

                    <div class="flex">
                        <label for="priod_of_time"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jangka Waktu (Hari)</label>
                        <div class="flex-[4]">
                            <input type="number" id="priod_of_time" name="priod_of_time"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal
                            Berakhir Penjanjian</label>
                        <div class="flex-[4]">
                            <input type="date" id="text" name="end_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    <div class="flex">
                        <label for="deposit"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Deposit</label>
                        <div class="flex-[4]">
                            <select required id="deposit" name="deposit"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>-- Pilih --</option>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="guarantee_nominal"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal
                            Jaminan</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="text" id="guarantee_nominal" name="guarantee_nominal"
                                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="main_branch"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Cabang Utama</label>
                        <div class="flex-[4]">
                            <input type="text" id="main_branch" name="main_branch"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="other_point" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Poin-Poin
                    Khusus
                    Lainnya Yang Dicantumkan Dalam Perjanjian Sesuai Kesapakatan Para Pihak:</label>
                <textarea required id="other_point" rows="4" name="other_point"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder=""></textarea>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="flex">
                    <label for="landlord_type"
                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tipe
                        Landlord</label>
                    <div class="flex-[12]">
                        <select required id="landlord_type" name="landlord_type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="Perorangan">Perorangan</option>
                            <option value="Badan Hukum">Badan Hukum</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                    <div class="row-span-25 font-medium">Alat Bukti :</div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_director_disposition"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Disposisi
                                Persetujuan Direksi</label>
                            <div class="flex-[4]">
                                <input name="file_director_disposition"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_director_disposition" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_internal_memo"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Internal
                                Memo</label>
                            <div class="flex-[4]">
                                <input name="file_internal_memo"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_internal_memo" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_internal_memo_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Internal
                                Memo (Optional)</label>
                            <div class="flex-[4]">
                                <input name="file_internal_memo_optional"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_internal_memo_optional" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_id_card"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kartu
                                Identitas Pemilik Hak *</label>
                            <div class="flex-[4]">
                                <input name="file_id_card"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_id_card" type="file_id_card" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_npwp"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                                Pokok Wajib Pajak Pemilik *</label>
                            <div class="flex-[4]">
                                <input name="file_npwp"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_npwp" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_kk"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kartu
                                Keluarga *</label>
                            <div class="flex-[4]">
                                <input name="file_kk"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_kk" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_mariagge_book"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Buku
                                Nikah / Akta Nikah *</label>
                            <div class="flex-[4]">
                                <input name="file_mariagge_book"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_mariagge_book" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_director_id_card"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">KTP
                                Direksi **</label>
                            <div class="flex-[4]">
                                <input name="file_director_id_card"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_director_id_card" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_deed"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Akta
                                Pendirian dan Perubahan Terakhir **</label>
                            <div class="flex-[4]">
                                <input name="file_deed"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_deed" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_sk_menkumham"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">SK
                                Menkumham **</label>
                            <div class="flex-[4]">
                                <input name="file_sk_menkumham"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_sk_menkumham" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_business_permit"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin
                                Usaha OSS **</label>
                            <div class="flex-[4]">
                                <input name="file_business_permit"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_business_permit" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_nib"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                                Induk Berusaha (NIB) **</label>
                            <div class="flex-[4]">
                                <input name="file_nib"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_nib" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_npwp_company"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                                Pokok Wajib Pajak Perusahaan (NPWP) **</label>
                            <div class="flex-[4]">
                                <input name="file_npwp_company"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_npwp_company" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_location_permit"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin
                                Lokasi OSS **</label>
                            <div class="flex-[4]">
                                <input name="file_location_permit"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_location_permit" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_setificate"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Sertipikat
                                / Girik</label>
                            <div class="flex-[4]">
                                <input name="file_setificate"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_setificate" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_imb"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin
                                Mendirikan Bangunan</label>
                            <div class="flex-[4]">
                                <input name="file_imb"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_imb" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_sppt1"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">SPPT
                                & STTS (PBB)</label>
                            <div class="flex-[4]">
                                <input name="file_sppt1"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_sppt1" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_sppt2"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                            <div class="flex-[4]">
                                <input name="file_sppt2"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_sppt2" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_sppt3"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                            <div class="flex-[4]">
                                <input name="file_sppt3"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_sppt3" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_procuration"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Asli
                                Surat Kuasa</label>
                            <div class="flex-[4]">
                                <input name="file_procuration"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_procuration" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_previous_agreement"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Perjanjian
                                Sewa Sebelumnya</label>
                            <div class="flex-[4]">
                                <input name="file_previous_agreement"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_previous_agreement" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_director_procuration"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Surat
                                Kuasa Direksi</label>
                            <div class="flex-[4]">
                                <input name="file_director_procuration"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_director_procuration" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_others_1"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Others 1</label>
                            <div class="flex-[4]">
                                <input name="file_others_1"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_others_1" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_others_2"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Others 2</label>
                            <div class="flex-[4]">
                                <input name="file_others_2"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_others_2" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="file_others_3"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Others 3</label>
                            <div class="flex-[4]">
                                <input name="file_others_3"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="file_others_3" type="file" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                    <div class="col-start-2 col-span-4 -mt-4 ml-14">
                        <div class="flex">
                            <label for="text"
                                class="flex items-center flex-[3] mb-2 text-md font-light text-gray-900 dark:text-gray-300">*
                                Jika Pemilik Perorangan</label>
                        </div>
                        <div class="flex">
                            <label for="text"
                                class="flex items-center flex-[3] mb-2 text-md font-light text-gray-900 dark:text-gray-300">**
                                Jika Pemilik Badan Hukum dan Badan Usaha</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end items-center -mt-16">
                <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Input</button>
            </div>
        </form>
    </div>

    <script type="text/babel">
        function FormAddress() {
            const [regency, setRegency] = React.useState([])
            const [district, setDistrict] = React.useState([])
            const [village, setVillage] = React.useState([])
            
            const [form, setForm] = React.useState({
                landlord_province: "",
                landlord_regency: "",
                landlord_district: "",
                landlord_village: "",
                landlord_zip_code: "",
                landlord_address: "",
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
                        <label for="landlord_province"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                            Landlord
                        </label>
                        <div class="flex-[4]">
                            <select onChange={ inputProvinceChange } name="landlord_province" id="landlord_province"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                @foreach ($province as $row)
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {form.landlord_province && (
                        <div class="flex">
                            <label for="landlord_regency"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputRegencyChange } name="landlord_regency" id="landlord_regency"
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

                    {form.landlord_regency && (
                        <div class="flex">
                            <label for="landlord_district"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputDistrictChange } name="landlord_district" id="landlord_district"
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

                    {form.landlord_district && (
                        <div class="flex">
                            <label for="landlord_village"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputChange } name="landlord_village" id="landlord_village"
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

                    {form.landlord_village && (
                        <div class="flex flex-col gap-4">
                            <div class="flex">
                                <label for="landlord_zip_code"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <input type="text" id="landlord_zip_code" name="landlord_zip_code"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Kode Pos" required/>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="landlord_address"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <textarea id="landlord_address" name="landlord_address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
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
                landlord_province_optional: "",
                landlord_regency_optional: "",
                landlord_district_optional: "",
                landlord_village_optional: "",
                landlord_zip_code_optional: "",
                landlord_address_optional: "",
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
                        <label for="landlord_province_optional"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                            Landlord (Optional)
                        </label>
                        <div class="flex-[4]">
                            <select onChange={ inputProvinceChange } name="landlord_province_optional" id="landlord_province_optional"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                @foreach ($province as $row)
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {form.landlord_province_optional && (
                        <div class="flex">
                            <label for="landlord_regency_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputRegencyChange } name="landlord_regency_optional" id="landlord_regency_optional"
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

                    {form.landlord_regency_optional && (
                        <div class="flex">
                            <label for="landlord_district_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputDistrictChange } name="landlord_district_optional" id="landlord_district_optional"
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

                    {form.landlord_district_optional && (
                        <div class="flex">
                            <label for="landlord_village_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputChange } name="landlord_village_optional" id="landlord_village_optional"
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

                    {form.landlord_village_optional && (
                        <div class="flex flex-col gap-4">
                            <div class="flex">
                                <label for="landlord_zip_code_optional"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <input type="text" id="landlord_zip_code_optional" name="landlord_zip_code_optional"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Kode Pos" required/>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="landlord_address_optional"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <textarea id="landlord_address_optional" name="landlord_address_optional" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            )
        }

        ReactDOM.render(<FormAddressOptional />,document.getElementById('formAddressOptional'))
        
        function FormObject() {
            const [regency, setRegency] = React.useState([])
            const [district, setDistrict] = React.useState([])
            const [village, setVillage] = React.useState([])
            
            const [form, setForm] = React.useState({
                province_object: "",
                regency_object: "",
                district_object: "",
                village_object: "",
                zip_code_object: "",
                address_object: "",
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
                        <label for="province_object"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat Obyek Sewa
                        </label>
                        <div class="flex-[4]">
                            <select onChange={ inputProvinceChange } name="province_object" id="province_object"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                @foreach ($province as $row)
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {form.province_object && (
                        <div class="flex">
                            <label for="regency_object"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputRegencyChange } name="regency_object" id="regency_object"
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

                    {form.regency_object && (
                        <div class="flex">
                            <label for="district_object"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputDistrictChange } name="district_object" id="district_object"
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

                    {form.district_object && (
                        <div class="flex">
                            <label for="village_object"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputChange } name="village_object" id="village_object"
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

                    {form.village_object && (
                        <div class="flex flex-col gap-4">
                            <div class="flex">
                                <label for="zip_code_object"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <input type="text" id="zip_code_object" name="zip_code_object"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Kode Pos" required/>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="address_object"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <textarea id="address_object" name="address_object" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            )
        }

        ReactDOM.render(<FormObject />,document.getElementById('formObject'))
    </script>
@endsection
