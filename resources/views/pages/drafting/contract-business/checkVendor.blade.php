@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Vendor & Supplier Check</h1>

        <form class="mt-4" method="post" enctype="multipart/form-data"
            action="{{ route('cd-check-vendor-post', $data->id) }}">
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
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Pihak
                            Pertama</label>
                        <div class="flex-[4]">
                            <input type="text" id="party_name" name="party_name" value="{{ $data->party_name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for=""
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat Pihak</label>
                        <div class="flex-[4] grid gap-4">
                            <div class="flex">
                                <label for="party_province"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Provisi</label>
                                <div class="flex-[4]">
                                    @php
                                        $province = DB::table('provinces')->where('id', $data->party_province)->first();
                                    @endphp
                                    <input type="text" id="party_province" name="party_province" value="{{ $province->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_regency"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kab/Kota</label>
                                <div class="flex-[4]">
                                    @php
                                        $regency = DB::table('regencies')->where('id', $data->party_regency)->first();
                                    @endphp
                                    <input type="text" id="party_regency" name="party_regency" value="{{ $regency->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_district"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kecamatan</label>
                                <div class="flex-[4]">
                                    @php
                                        $district = DB::table('districts')->where('id', $data->party_district)->first();
                                    @endphp
                                    <input type="text" id="party_district" name="party_district" value="{{ $district->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_village"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kelurahan</label>
                                <div class="flex-[4]">
                                    @php
                                        $village = DB::table('villages')->where('id', $data->party_village)->first();
                                    @endphp
                                    <input type="text" id="party_village" name="party_village" value="{{ $village->name }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_zip_code"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kode Pos</label>
                                <div class="flex-[4]">
                                    <input type="text" id="party_zip_code" name="party_zip_code" value="{{ $data->party_zip_code }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required readonly>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_address"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jalan</label>
                                <div class="flex-[4]">
                                    <textarea id="party_address" name="party_address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">{{ $data->party_address }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($data->party_name_optional != null)
                        <div class="flex">
                            <label for="party_name_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama Pihak (Optional)</label>
                            <div class="flex-[4]">
                                <input type="text" id="party_name_optional" name="party_name_optional" value="{{ $data->party_name_optional }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required readonly>
                            </div>
                        </div>
                        <div class="flex">
                            <label for=""
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat Pihak (Optional)</label>
                            <div class="flex-[4] grid gap-4">
                                <div class="flex">
                                    <label for="party_province_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Provisi</label>
                                    <div class="flex-[4]">
                                        @php
                                            $province_optional = DB::table('provinces')->where('id', $data->party_province_optional)->first();
                                        @endphp
                                        <input type="text" id="party_province" name="party_province_optional" value="{{ $province_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_regency_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kab/Kota</label>
                                    <div class="flex-[4]">
                                        @php
                                            $regency_optional = DB::table('regencies')->where('id', $data->party_regency_optional)->first();
                                        @endphp
                                        <input type="text" id="party_regency_optional" name="party_regency_optional" value="{{ $regency_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_district_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kecamatan</label>
                                    <div class="flex-[4]">
                                        @php
                                            $district_optional = DB::table('districts')->where('id', $data->party_district_optional)->first();
                                        @endphp
                                        <input type="text" id="party_district_optional" name="party_district_optional" value="{{ $district_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_village_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kelurahan</label>
                                    <div class="flex-[4]">
                                        @php
                                            $village_optional = DB::table('villages')->where('id', $data->party_village_optional)->first();
                                        @endphp
                                        <input type="text" id="party_village_optional" name="party_village_optional" value="{{ $village_optional->name }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_zip_code_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kode Pos</label>
                                    <div class="flex-[4]">
                                        <input type="text" id="party_zip_code_optional" name="party_zip_code_optional" value="{{ $data->party_zip_code_optional }}"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="" required readonly>
                                    </div>
                                </div>
                                <div class="flex">
                                    <label for="party_address_optional"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jalan</label>
                                    <div class="flex-[4]">
                                        <textarea readonly id="party_address_optional" name="party_address_optional" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">{{ $data->party_address_optional }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="flex">
                        <label for="agreement_nominal"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal Perjanjian</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="text" id="agreement_nominal" name="agreement_nominal"
                                value="{{ $data->agreement_nominal }}" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="vendor_type"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Pihak
                            Jenis</label>
                        <div class="flex-[4]">
                            <input type="text" id="vendor_type" name="vendor_type" value="{{ $data->vendor_type }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="guarantee"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jaminan</label>
                        <div class="flex-[4]">
                            <input type="text" id="guarantee" name="guarantee" value="{{ $data->guarantee }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="relation_period"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jangka Waktu Retensi</label>
                        <div class="flex-[4]">
                            <input type="text" id="relation_period" name="relation_period" value="{{ $data->relation_period }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Poin-Poin
                    Khusus Lainnya Yang Dicantumkan Dalam Perjanjian Sesuai Kesepakatan Para Pihak:</label>
                <textarea id="message" rows="4" name="other_point"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" readonly>{{ $data->other_point }}</textarea>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="grid grid-rows-4 grid-flow-col gap-4">
                    <div class="row-span-8 font-medium">Entitas :</div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">1. Akta Perusahaan</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    {{-- @php
                                        
                                    @endphp
                                    @dd($data->file_vendor_offer) --}}
                                    <a href="{{ route('download-Drafting', substr($data->file_vendor_offer, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">2. Nomor Induk Berusaha (NIB)</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_mom, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">3. Nomor Pokok Wajib Pajak (NPWP)</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_dispotition, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">4. Izin Usaha</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_agreement_draft, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">5. Izin Lokasi OSS</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_agreement_draft, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">6. KTP Direksi</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_agreement_draft, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">7. Surat Kuasa</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_agreement_draft, 16)) }}"
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
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">8. Lain-lain</label>
                            <div class="flex-[4]">
                                <div class="flex flex-row">
                                    <a href="{{ route('download-Drafting', substr($data->file_agreement_draft, 16)) }}"
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

                <div class="grid grid-rows-4 grid-flow-col gap-4 mb-4">
                    <div class="row-span-7 font-medium">Entitas Customer :</div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Akta
                                & SK Kemenkumham</label>
                            <div class="flex-[4]">

                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_sk_menkumham, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                                Induk Berusaha (NIB)</label>
                            <div class="flex-[4]">
                                {{-- <input
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"> --}}
                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_nib, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                                Pokok Wajib Pajak (NPWP)</label>
                            <div class="flex-[4]">
                                {{-- <input
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"> --}}
                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_vendor_offer, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Izin
                                Usaha & Izin Lokasi OSS</label>
                            <div class="flex-[4]">
                                {{-- <input
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"> --}}
                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_business_permit, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">KTP
                                Direksi</label>
                            <div class="flex-[4]">
                                {{-- <input
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"> --}}
                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_director_id_card, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Internal
                                Memo</label>
                            <div class="flex-[4]">
                                {{-- <input name="file_internal_memo" value="{{ $data->file_internal_memo }}"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="text"> --}}
                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_internal_memo, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                            <div class="grid grid-cols-3 ml-4 gap-2">
                                {{-- <form action="" class="">
                                    <button type="button"
                                        class="w-full h-full justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </form>

                                <form action="" class="">
                                    <button type="button"
                                        class="w-full h-full justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </form>

                                <form action="" class="">
                                    <button type="button"
                                        class="w-full h-full justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Lain-lain</label>
                            <div class="flex-[4]">
                                {{-- <input
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"> --}}
                                <div class="flex flex-row">

                                    <a href="{{ route('download-Drafting', substr($data->file_other, 16)) }}"
                                        style="font-size:24px ">
                                        <div
                                            class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                            Download
                                            <i class="fa fa-download"></i>

                                        </div>
                                    </a>

                                    {{-- {{ substr($data->file_disposition, 14) }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4 mb-4">
                    <div class="block">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Reason
                            if Return :</label>
                        <div class="flex-[4]">
                            <textarea id="message" rows="4" name="note"
                                class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder=""></textarea>
                        </div>
                    </div>
                </div>

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
