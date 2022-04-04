@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Lease Check</h1>

        <form class="mt-4" method="POST" enctype="multipart/form-data"
            action="{{ route('legal-lease-check-post', $data->id) }}">
            @csrf

            <div class="grid grid-cols-1 gap-16 mb-4">
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="id"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Pengajuan</label>
                        <div class="flex-[4]">
                            <input type="text" id="id" name="id" value="{{ $data->id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="party_name"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama Landlord</label>
                        <div class="flex-[4]">
                            <input type="text" id="party_name" name="party_name" value="{{ $data->landlord_name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for=""
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat Landlord</label>
                        <div class="flex-[4] grid gap-4">
                            <div class="flex">
                                <label for="party_province"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Provisi</label>
                                <div class="flex-[4]">
                                    @php
                                        $province = DB::table('provinces')
                                            ->where('id', $data->landlord_province)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_province" name="party_province"
                                        value="{{ $province->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_regency"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kab/Kota</label>
                                <div class="flex-[4]">
                                    @php
                                        $regency = DB::table('regencies')
                                            ->where('id', $data->landlord_regency)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_regency" name="party_regency"
                                        value="{{ $regency->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_district"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kecamatan</label>
                                <div class="flex-[4]">
                                    @php
                                        $district = DB::table('districts')
                                            ->where('id', $data->landlord_district)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_district" name="party_district"
                                        value="{{ $district->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_village"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kelurahan</label>
                                <div class="flex-[4]">
                                    @php
                                        $village = DB::table('villages')
                                            ->where('id', $data->landlord_village)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_village" name="party_village"
                                        value="{{ $village->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_zip_code"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kode
                                    Pos</label>
                                <div class="flex-[4]">
                                    <input type="text" id="party_zip_code" name="party_zip_code"
                                        value="{{ $data->landlord_zip_code }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_address"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jalan</label>
                                <div class="flex-[4]">
                                    <textarea id="party_address" name="party_address" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="">{{ $data->landlord_address }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($data->landlord_name_optional != null)
                        <div class="flex">
                            <label for="party_name_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                                Landlord (Optional)</label>
                            <div class="flex-[4]">
                                <input type="text" id="party_name_optional" name="party_name_optional"
                                    value="{{ $data->landlord_name_optional }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required readonly>
                            </div>
                        </div>
                        <div class="flex">
                            <label for=""
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                                Landlord (Optional)</label>
                            <div class="flex-[4] grid gap-4">
                                <div class="flex">
                                    <label for="party_province_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Provisi</label>
                                    <div class="flex-[4]">
                                        @php
                                            $province_optional = DB::table('provinces')
                                                ->where('id', $data->landlord_province_optional)
                                                ->first();
                                        @endphp
                                        <input type="text" id="party_province" name="party_province_optional"
                                            value="{{ $province_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_regency_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kab/Kota</label>
                                    <div class="flex-[4]">
                                        @php
                                            $regency_optional = DB::table('regencies')
                                                ->where('id', $data->landlord_regency_optional)
                                                ->first();
                                        @endphp
                                        <input type="text" id="party_regency_optional" name="party_regency_optional"
                                            value="{{ $regency_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_district_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kecamatan</label>
                                    <div class="flex-[4]">
                                        @php
                                            $district_optional = DB::table('districts')
                                                ->where('id', $data->landlord_district_optional)
                                                ->first();
                                        @endphp
                                        <input type="text" id="party_district_optional" name="party_district_optional"
                                            value="{{ $district_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_village_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kelurahan</label>
                                    <div class="flex-[4]">
                                        @php
                                            $village_optional = DB::table('villages')
                                                ->where('id', $data->landlord_village_optional)
                                                ->first();
                                        @endphp
                                        <input type="text" id="party_village_optional" name="party_village_optional"
                                            value="{{ $village_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_zip_code_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kode
                                        Pos</label>
                                    <div class="flex-[4]">
                                        <input type="text" id="party_zip_code_optional" name="party_zip_code_optional"
                                            value="{{ $data->landlord_zip_code_optional }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_address_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jalan</label>
                                    <div class="flex-[4]">
                                        <textarea readonly id="party_address_optional" name="party_address_optional" rows="4"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="">{{ $data->landlord_address_optional }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="flex">
                        <label for="type"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Jenis</label>
                        <div class="flex-[4]">
                            <input type="text" id="type" name="type" value="{{ $data->type }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="type"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Regional</label>
                        <div class="flex-[4]">
                            <input type="text" id="type" name="type" value="{{ $data->regional }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="type"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Nilai Sewa</label>
                        <div class="flex-[4]">
                            <input type="text" id="type" name="type" value="{{ $data->rental_value }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for=""
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat Object Sewa</label>
                        <div class="flex-[4] grid gap-4">
                            <div class="flex">
                                <label for="party_province"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Provisi</label>
                                <div class="flex-[4]">
                                    @php
                                        $province = DB::table('provinces')
                                            ->where('id', $data->province_object)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_province" name="party_province"
                                        value="{{ $province->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_regency"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kab/Kota</label>
                                <div class="flex-[4]">
                                    @php
                                        $regency = DB::table('regencies')
                                            ->where('id', $data->regency_object)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_regency" name="party_regency"
                                        value="{{ $regency->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_district"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kecamatan</label>
                                <div class="flex-[4]">
                                    @php
                                        $district = DB::table('districts')
                                            ->where('id', $data->district_object)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_district" name="party_district"
                                        value="{{ $district->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_village"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kelurahan</label>
                                <div class="flex-[4]">
                                    @php
                                        $village = DB::table('villages')
                                            ->where('id', $data->village_object)
                                            ->first();
                                    @endphp
                                    <input type="text" id="party_village" name="party_village"
                                        value="{{ $village->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_zip_code"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kode
                                    Pos</label>
                                <div class="flex-[4]">
                                    <input type="text" id="party_zip_code" name="party_zip_code"
                                        value="{{ $data->zip_code_object }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_address"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jalan</label>
                                <div class="flex-[4]">
                                    <textarea id="party_address" name="party_address" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="">{{ $data->address_object }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Jangka Waktu (Hari)
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="rantal_value" value="{{ $data->priod_of_time }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Deposit
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="rantal_value" value="{{ $data->deposit }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Nominal Jaminan
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="rantal_value" value="{{ $data->guarantee_nominal }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Cabang Utama
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="rantal_value" value="{{ $data->main_branch }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Poin-Poin
                    Khusus Lainnya Yang Dicantumkan Dalam Perjanjian Sesuai Kesepakatan Para Pihak:</label>
                <textarea id="message" rows="4" name="other_point" value="{{ $data->other_point }}"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" readonly>{{ $data->other_point }}</textarea>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="flex">
                    <label for="text"
                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        Tipe Landlord
                    </label>
                    <div class="flex-[4]">
                        <input type="text" id="text" name="rantal_value" value="{{ $data->landlord_type }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                    </div>
                </div>

                <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                    <div class="row-span-23 font-medium">Alat Bukti :</div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Disposisi Persetujuan Direksi</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_director_disposition, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Internal Memo
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_internal_memo, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Internal Memo (Option)
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_internal_memo_optional, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Kartu Identitas Pemilik Hak *
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_id_card, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Nomor Pokok Wajib Pajak Pemilik *
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_npwp, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Kartu Keluarga *
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_kk, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Buku Nikah / Akta Nikah *
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_mariagge_book, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                KTP Direksi **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_director_id_card, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Akta Pendirian dan Perubahan Terakhir **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_deed, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                SK Menkumham **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_sk_menkumham, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Izin Usaha OSS **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_business_permit, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Nomor Induk Berusaha (NIB) **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_nib, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Nomor Pokok Wajib Pajak Perusahaan (NPWP) **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_npwp_company, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Izin Lokasi OSS **
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_location_permit, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Sertipikat / Girik
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_setificate, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Izin Mendirikan Bangunan
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_imb, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                SPPT & STTS (PBB)
                            </label>
                            <div class="flex-[4] flex flex-col gap-5">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_sppt1, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_sppt2, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_sppt3, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Asli Surat Kuasa
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_procuration, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Perjanjian Sewa Sebelumnya
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_previous_aggreement, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Surat Kuasa Direksi
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_director_procuration, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Others 1
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_others1, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Others 2
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_others2, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                Others 3
                            </label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a 
                            href="{{ route('download-Drafting', substr($data->file_others3, 9)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                    <div class="col-start-2 col-span-4 -mt-4">
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

            <div class="flex flex-col mb-4 -mt-20">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Reason If
                    Return:</label>
                <textarea id="message" rows="4" name="note"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder=""></textarea>
            </div>

            <div class="flex justify-end items-center">
                <button type="submit" value="return" name="action"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Return</button>
                <button type="submit" value="approve" name="action"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Approve</button>
            </div>
        </form>
    </div>
@endsection
