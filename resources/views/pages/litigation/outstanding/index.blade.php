@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Outstanding</h1>
        @if (Session::get('message_success'))
            <div class="bg-green-200 rounded-xl p-5 text-green-600">
                {{ Session::get('message_success') }}
            </div>
        @endif
        <form class="mt-4" method="post" enctype="multipart/form-data" action="{{ route('outstanding-post') }}">
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
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Pihak
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="party_name" value="{{ $data->outstanding->party_name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div id="formAddress"></div>
                </div>

                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Unit/Departemen/Divisi</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="department"
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
                                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Tanggal Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="date" id="date" name="from_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            Tanggal Berakhir Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="date" id="date" name="till_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kronologis
                    Singkat
                    Kejadian:</label>
                <textarea id="message" rows="4" name="incident_chronology"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" required></textarea>
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
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_pcrf" type="file"
                                    required>
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
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_recapitulation"
                                    type="file" required>
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
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" name="file_packing_list"
                                    type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">4.
                                Bukti Penagihan*</label>
                            <div class="flex-[4]">
                                <input name="file_billing_proof"
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
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
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesAkta" style="display: none;">
                                    <input name="file_deed_company"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesNib" style="display: none;">
                                    <input name="file_npwp"
                                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-span-2">
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
                    </div>
                </div>


                <div class="flex justify-end items-center">
                    <input type="submit"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        name="btnADD" id="btnADD" value="Submit" {{-- onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();" --}} />
                    {{-- <button type="button"
                class="">Submit</button> --}}
                </div>
            </div>
        </form>
    </div>

    <script type="text/babel">
        function FormAddress() {
                                                const [regency, setRegency] = React.useState([])
                                                const [district, setDistrict] = React.useState([])
                                                const [village, setVillage] = React.useState([])

                                                const [form, setForm] = React.useState({
                                                    party_province: "",
                                                    party_regency: "",
                                                    party_district: "",
                                                    party_village: "",
                                                    party_zip_code: "",
                                                    party_address: "",
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
                                                            <label for="party_province"
                                                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                                                                Pihak
                                                            </label>
                                                            <div class="flex-[4]">
                                                                <select onChange={ inputProvinceChange } name="party_province" id="party_province"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option value="" selected disabled>Pilih Provinsi</option>
                                                                    @foreach ($province as $row)
                                                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        {form.party_province && (
                                                            <div class="flex">
                                                                <label for="party_regency"
                                                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                </label>
                                                                <div class="flex-[4]">
                                                                    <select onChange={ inputRegencyChange } name="party_regency" id="party_regency"
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

                                                        {form.party_regency && (
                                                            <div class="flex">
                                                                <label for="party_district"
                                                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                </label>
                                                                <div class="flex-[4]">
                                                                    <select onChange={ inputDistrictChange } name="party_district" id="party_district"
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

                                                        {form.party_district && (
                                                            <div class="flex">
                                                                <label for="party_village"
                                                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                </label>
                                                                <div class="flex-[4]">
                                                                    <select onChange={ inputChange } name="party_village" id="party_village"
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

                                                        {form.party_village && (
                                                            <div class="flex flex-col gap-4">
                                                                <div class="flex">
                                                                    <label for="party_zip_code"
                                                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                    </label>
                                                                    <div class="flex-[4]">
                                                                        <input type="text" id="party_zip_code" name="party_zip_code"
                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                            placeholder="Masukkan Kode Pos" required/>
                                                                    </div>
                                                                </div>
                                                                <div class="flex">
                                                                    <label for="party_address"
                                                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                                                    </label>
                                                                    <div class="flex-[4]">
                                                                        <textarea id="party_address" name="party_address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        )}
                                                    </div>
                                                )
                                            }

                                            ReactDOM.render(<FormAddress />,document.getElementById('formAddress'))
                                </script>
    <script>
        function akta(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesAkta").style.display = "flex";
            } else {
                document.getElementById("ifYesAkta").style.display = "none";
            }
        }

        function nib(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesNib").style.display = "flex";
            } else {
                document.getElementById("ifYesNib").style.display = "none";
            }
        }
    </script>
@endsection
