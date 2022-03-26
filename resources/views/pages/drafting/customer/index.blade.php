@extends('layouts.main')

@section('content')
    <div class="flex flex-col gap-4 mx-36 my-4">
        <h1 class="text-4xl mb-4 text-black capitalize font-medium">Customer</h1>

        <form class="mt-4" method="POST" enctype="multipart/form-data" action="{{ route('customer-post') }}">
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
                        <label for="party_name"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Pihak
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="party_name" name="party_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    
                    <div id="formAddress">
                    </div>

                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                            Pihak (Optional)
                        </label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="first_party"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    
                    <div id="formAddressOptional">
                    </div>

                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Draft
                            Perjanjian</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="agreement_draft"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jenis</label>
                        <div class="flex-[4]">
                            <select name="" id="Addendum" onchange="addendum(this)"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="Baru">Baru</option>
                                <option value="Perpanjangan">Perpanjangan</option>
                                <option value="Addendum">Addendum</option>
                                <option value="Pembaharuan">Pembaharuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex" id="ifYes" style="display: none;">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Addendum
                            ke-</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="agreement_draft"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                    {{-- <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal
                            Mulai
                            Kejadian</label>
                        <div class="flex-[4]">
                            <input type="date" id="date" name="start_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    {{-- <div class="flex">
                        <label for="date"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Tanggal
                            Berakhir
                            Kejadian</label>
                        <div class="flex-[4]">
                            <input type="date" id="date" name="end_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Jenis
                            Customer</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="customer_type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Asuransi
                            Barang</label>
                        <div class="flex-[4]">
                            <input type="text" id="text" name="assurance_goods"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    {{-- <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Ganti
                            Rugi</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                Rp
                            </span>
                            <input type="text" id="website-admin" name="compensation"
                                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div> --}}
                    <div class="flex">
                        <label for="text"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Discount</label>
                        <div class="flex flex-[4]">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md border border-r-0 border-gray-300 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                %
                            </span>
                            <input type="text" id="website-admin" name="discount"
                                class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Poin-Poin
                    Khusus Lainnya Yang Dicantumkan Dalam Perjanjian Sesuai Kesepakatan
                    Para Pihak:</label>
                <textarea required id="message" rows="4" name="other_point"
                    class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder=""></textarea>
            </div>

            <div class="flex flex-col gap-4 mb-4">
                <div class="grid grid-rows-3 grid-flow-col gap-4 mb-4">
                    <div class="row-span-4 font-medium">Dokumen :</div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">MOM/Penawaran
                                Kesepakatan Para Pihak</label>
                            <div class="flex-[4]">
                                <input name="file_mom"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Draft
                                Perjanjian dalam bentuk word</label>
                            <div class="flex-[4]">
                                <input name="file_agreement_draft"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Form
                                Pengajuan PKS*</label>
                            <div class="flex-[4]">
                                <input name="file_claim_form"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="formAddressResponden"></div>

                <div class="grid grid-rows-3 grid-flow-col gap-4 mb-4">
                    <div class="row-span-8 font-medium">Entitas :</div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">1.
                                Akta
                                Perusahaan</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" id="Akta" onchange="akta(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesAkta" style="display: none;">
                                    <input name="file_npwp"
                                        class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">2.
                                Nomor
                                Induk Berusaha (NIB)*</label>
                            <div class="flex-[4]">
                                <input name="file_nib"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">3.
                                Nomor
                                Pokok Wajib Pajak (NPWP)*</label>
                            <div class="flex-[4]">
                                <input name="file_npwp"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">4.
                                Izin
                                Usaha</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" id="Usaha" onchange="usaha(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesUsaha" style="display: none;">
                                    <input name="file_npwp"
                                        class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">5.
                                Izin
                                Lokasi OSS</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" id="Lokasi" onchange="loc(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesLoc" style="display: none;">
                                    <input name="file_npwp"
                                        class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">6.
                                KTP
                                Direksi</label>
                            <div class="flex-[4] flex items-center">
                                <div class="flex-[1] mr-2">
                                    <select name="" onchange="ktp(this)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option style="display: none">Pilih</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="flex-[3]" id="ifYesKtp" style="display: none;">
                                    <input name="file_npwp"
                                        class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">7.
                                Surat
                                Kuasa*</label>
                            <div class="flex-[4]">
                                <input name="file_other"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="flex">
                            <label for="date"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">8.
                                Lain-lain</label>
                            <div class="flex-[4]">
                                <input name="file_other"
                                    class="p-2.5 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center">
                    <button type="submit"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xl px-20 py-4 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Submit</button>
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
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
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
        
        function FormAddressOptional() {
            const [regency, setRegency] = React.useState([])
            const [district, setDistrict] = React.useState([])
            const [village, setVillage] = React.useState([])
            
            const [form, setForm] = React.useState({
                party_province_optional: "",
                party_regency_optional: "",
                party_district_optional: "",
                party_village_optional: "",
                party_zip_code_optional: "",
                party_address_optional: "",
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
                        <label for="party_province_optional"
                            class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                            Pihak
                        </label>
                        <div class="flex-[4]">
                            <select onChange={ inputProvinceChange } name="party_province_optional" id="party_province_optional"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected disabled>Pilih Provinsi</option>
                                @foreach ($province as $row)
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {form.party_province_optional && (
                        <div class="flex">
                            <label for="party_regency_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputRegencyChange } name="party_regency_optional" id="party_regency_optional"
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

                    {form.party_regency_optional && (
                        <div class="flex">
                            <label for="party_district_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputDistrictChange } name="party_district_optional" id="party_district_optional"
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

                    {form.party_district_optional && (
                        <div class="flex">
                            <label for="party_village_optional"
                                class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                            </label>
                            <div class="flex-[4]">
                                <select onChange={ inputChange } name="party_village_optional" id="party_village_optional"
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

                    {form.party_village_optional && (
                        <div class="flex flex-col gap-4">
                            <div class="flex">
                                <label for="party_zip_code_optional"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <input type="text" id="party_zip_code_optional" name="party_zip_code_optional"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Masukkan Kode Pos" required/>
                                </div>
                            </div>
                            <div class="flex">
                                <label for="party_address_optional"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">
                                </label>
                                <div class="flex-[4]">
                                    <textarea id="party_address_optional" name="party_address_optional" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            )
        }

        ReactDOM.render(<FormAddressOptional />,document.getElementById('formAddressOptional'))
        
        function FormAddressResponden() {
            const [regency, setRegency] = React.useState([])
            const [district, setDistrict] = React.useState([])
            const [village, setVillage] = React.useState([])
            
            const [form, setForm] = React.useState({
                party_province_responden: "",
                party_regency_responden: "",
                party_district_responden: "",
                party_village_responden: "",
                party_zip_code_responden: "",
                party_address_responden: "",
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
                <div>
                    <div class="grid grid-rows-2 grid-flow-col gap-4 mb-4">
                        <div class="row-span-9 font-medium">Koresponden:</div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Nama
                                    Responden</label>
                                <div class="flex-[4]">
                                    <input type="text" id="text" name="agreement_draft"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="party_province_responden"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Alamat
                                    Responden</label>
                                <div class="flex-[4]">
                                    <select onChange={ inputProvinceChange } name="party_province_responden" id="party_province_responden"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="" selected disabled>Pilih Provinsi</option>
                                        @foreach ($province as $row)
                                            <option value="{{$row->id}}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        { form.party_province_responden && (
                            <div class="col-span-2">
                                <div class="flex">
                                    <label for="party_regency_responden"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                                    <div class="flex-[4]">
                                        <select onChange={ inputRegencyChange } name="party_regency_responden" id="party_regency_responden"
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
                            </div>
                        ) }

                        { form.party_regency_responden && (
                            <div class="col-span-2">
                                <div class="flex">
                                    <label for="party_district_responden"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                                    <div class="flex-[4]">
                                        <select onChange={ inputDistrictChange } name="party_district_responden" id="party_district_responden"
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
                            </div>
                        ) }

                        { form.party_district_responden && (
                            <div class="col-span-2">
                                <div class="flex">
                                    <label for="party_village_responden"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                                    <div class="flex-[4]">
                                        <select onChange={ inputChange } name="party_village_responden" id="party_village_responden"
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
                            </div>
                        ) }

                        { form.party_village_responden && (
                            <div class="col-span-2">
                                <div class="flex">
                                    <label for="party_zip_code_responden"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                                    <div class="flex-[4]">
                                        <input onChange={ inputChange } type="text" id="party_zip_code_responden" name="party_zip_code_responden"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Masukkan Kode Pos" required/>
                                    </div>
                                </div>
                            </div>
                        ) }

                        { form.party_village_responden && (
                            <div class="col-span-2">
                                <div class="flex">
                                    <label for="party_address_responden"
                                        class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300"></label>
                                    <div class="flex-[4]">
                                        <textarea onChange={ inputChange } id="party_address_responden" name="party_address_responden" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Jalan..."></textarea>
                                    </div>
                                </div>
                            </div>
                        ) }
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">No
                                    Telepon Responden</label>
                                <div class="flex-[4]">
                                    <input type="text" id="text" name="agreement_draft"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <div class="flex">
                                <label for="date"
                                    class="flex items-center flex-[3] mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Email
                                    Responden</label>
                                <div class="flex-[4]">
                                    <input type="text" id="text" name="agreement_draft"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            )
        }

        ReactDOM.render(<FormAddressResponden />,document.getElementById('formAddressResponden'))
    </script>

    <script>
        function addendum(that) {
            if (that.value == "Addendum") {
                // alert("check");
                document.getElementById("ifYes").style.display = "flex";
            } else {
                document.getElementById("ifYes").style.display = "none";
            }
        }

        function akta(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesAkta").style.display = "flex";
            } else {
                document.getElementById("ifYesAkta").style.display = "none";
            }
        }

        function usaha(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesUsaha").style.display = "flex";
            } else {
                document.getElementById("ifYesUsaha").style.display = "none";
            }
        }

        function loc(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesLoc").style.display = "flex";
            } else {
                document.getElementById("ifYesLoc").style.display = "none";
            }
        }

        function ktp(that) {
            if (that.value == "Ada") {
                // alert("check");
                document.getElementById("ifYesKtp").style.display = "flex";
            } else {
                document.getElementById("ifYesKtp").style.display = "none";
            }
        }
    </script>
@endsection
