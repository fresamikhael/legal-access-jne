@extends('layouts.main')

@section('content')
    <style>
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }

    </style>
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Litigasi Team CS</h1>

        <div class="tab">
            <div class="grid grid-cols-2 gap-16 mb-4">
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">ID
                            Dokumen</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" value="{{ $data->id }}" name="id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Pihak
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name" value="{{ $data->outstanding->party_name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                            Pihak
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name"
                                value="{{ App\Models\Province::find($data->outstanding->party_province)->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name"
                                value="{{ App\Models\Regency::find($data->outstanding->party_regency)->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name"
                                value="{{ App\Models\District::find($data->outstanding->party_district)->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name"
                                value="{{ App\Models\Village::find($data->outstanding->party_village)->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name"
                                value="{{ $data->outstanding->party_zip_code }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name" value="{{ $data->outstanding->party_address }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Dokumen Litigasi</label>
                        <div class="flex-[4]">
                            <input type="text" id="date" name="form_id" value="{{ $data->form_id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" readonly>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Unit/Departemen/Divisi</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="department" value="{{ $data->outstanding->department }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nomor
                            Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="agreement_number"
                                value="{{ $data->outstanding->agreement_number }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Total
                            Kerugian</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="number" id="website-admin" name="total_loss"
                                value="{{ $data->outstanding->total_loss }}"
                                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Tanggal Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="date" id="date" name="from_date" value="{{ $data->outstanding->from_date }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Tanggal Berakhir Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="date" id="date" name="till_date" value="{{ $data->outstanding->till_date }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">

                </div>
            </div>
            <div class="flex flex-col mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kronologis
                    Singkat
                    Kejadian:</label>
                <textarea id="message" rows="4" name="incident_chronology"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" readonly>{{ $data->outstanding->incident_chronology }}</textarea>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="grid grid-rows-4 grid-flow-col gap-4 mb-4">
                    <div class="row-span-8 font-medium">Bukti :</div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">1.
                                Perjanjian/PCRF*</label>
                            <div class="flex-[4]">
                                <a href="{{ route('download-litigation', substr($data->outstanding->file_pcrf, 11)) }}"
                                    style="font-size:24px ">
                                    <div class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Download
                                        <i class="fa fa-download"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">2.
                                Rekapitulasi
                                Data Outstanding*</label>
                            <div class="flex-[4]">
                                <a href="{{ route('download-litigation', substr($data->outstanding->file_recapitulation, 11)) }}"
                                    style="font-size:24px ">
                                    <div class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Download
                                        <i class="fa fa-download"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">3.
                                Packing
                                List/Invoice tertunggak*</label>
                            <div class="flex-[4]">
                                <a href="{{ route('download-litigation', substr($data->outstanding->file_packing_list, 18)) }}"
                                    style="font-size:24px ">
                                    <div class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Download
                                        <i class="fa fa-download"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">4.
                                Bukti Penagihan*</label>
                            <div class="flex-[4]">
                                <a href="{{ route('download-litigation', substr($data->outstanding->file_billing_proof, 18)) }}"
                                    style="font-size:24px ">
                                    <div class="bg-[#384094] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                        Download
                                        <i class="fa fa-download"></i>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">5.
                                Akta
                                Perusahaan</label>
                            <div class="flex-[1] mr-2">
                                <select name="" id="Akta" onchange="akta(this)"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option style="display: none">Pilih</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak">Tidak Ada</option>
                                </select>
                            </div>
                            <div class="flex-[3]" id="ifYesAkta" style="display: none;">
                                <input name="file_npwp"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div> --}}
                    @if ($data->outstanding->file_deed_company > 0)
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">5.
                                    Akta
                                    Perusahaan</label>
                                <div class="flex-[4] flex items-center">
                                    <a href="{{ route('download-litigation', substr($data->outstanding->file_deed_company, 18)) }}"
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
                    @else
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">5.
                                    Akta
                                    Perusahaan</label>
                                <div class="flex-[4] flex items-center">
                                    <div class="flex-[1] mr-2">
                                        <select onchange="akta(this)"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option style="display: none">Pilih</option>
                                            <option selected value="Tidak Ada">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($data->outstanding->file_deed_company > 0)
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">6.
                                    Nomor
                                    Induk Berusaha (NIB)</label>
                                <div class="flex-[4] flex items-center">
                                    <a href="{{ route('download-litigation', substr($data->outstanding->file_nib, 18)) }}"
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
                    @else
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">6.
                                    Nomor
                                    Induk Berusaha (NIB)</label>
                                <div class="flex-[4] flex items-center">
                                    <div class="flex-[1] mr-2">
                                        <select onchange="nib(this)"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option style="display: none">Pilih</option>
                                            <option selected value="Tidak Ada">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{-- <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">6.
                                Nomor
                                Induk Berusaha (NIB)</label>
                            <div class="flex-[1] mr-2">
                                <select name="" onchange="nib(this)"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option style="display: none">Pilih</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak">Tidak Ada</option>
                                </select>
                            </div>
                            <div class="flex-[3]" id="ifYesNib" style="display: none;">
                                <input name="file_npwp"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">7.
                                Dokumen Lainnya</label>
                            <div class="flex-[4]">
                                <input name="file_nib"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <form class="mt-4" method="post" enctype="multipart/form-data"
            action="{{ route('cs-update-outstanding-post', $data->id) }}">
            @csrf
            <div class="tab">
                <div class="flex flex-col gap-4 mb-4">

                    <div class="grid grid-rows-5 grid-flow-col gap-4">
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Form
                                    Kasus Sengketa Konsumen</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_consumer_dispute_case_form" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kronologis
                                    Pengiriman Operasional</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_operational_delivery_chronology" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Kronologis
                                    Penanganan CS</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_cs_handling_chronology" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                    POD</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" name="file_pod_evidence"
                                        type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                    Tanda Terima</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" name="file_receipt_proof"
                                        type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-rows-5 grid-flow-col gap-4 mb-4">
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                    Dokumentasi 1</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_proof_of_documentation1" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                    Dokumentasi 2</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_proof_of_documentation2" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Bukti
                                    Dokumentasi 3</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_proof_of_documentation3" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Dokumen
                                    pendukung lainnya</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar"
                                        name="file_other_supporting_document" type="file" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nominal
                                    penawaran ganti kerugian</label>
                                <div class="flex-[4]">
                                    <input
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" name="nominal_indemnity_offer"
                                        type="number" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div> --}}
            <!-- Circles which indicates the steps of the form: -->



            <div style="overflow:auto;" class="flex justify-end items-center">
                <div style="float:right;">
                    {{-- <button
                        style="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button
                        style="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> --}}
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        name="btnADD" id="prevBtn" value="Previous" onclick="nextPrev(-1)">Previous </button>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        name="btnADD" id="nextBtn" value="Next" onclick="nextPrev(1)">Next </button>
                    {{-- <button type="button"
                class="">Submit</button> --}}
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>

            </div>
        </form>
    </div>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
                document.getElementById('nextBtn').onclick = function() {
                    this.disabled = true;
                    this.value = 'Sending, please wait...';
                    this.form.submit();
                };
                // document.getElementById('nextBtn').type = 'submit';
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
                document.getElementById('nextBtn').onclick = function() {
                    nextPrev(1)
                };
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
@endsection
