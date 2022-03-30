<?php

namespace App\Http\Controllers\Drafting;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drafting\VendorSupplier;
use App\Models\Province;

class VendorController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = VendorSupplier::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'VS' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'VS' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'VS' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'VS' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'VS' . date('dmy') . $item;
            }
        }

        $province = Province::get();

        return view('pages.drafting.vendor_supplier.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow,
            'province' => $province
        ]);
    }

    public function check()
    {
        return view('pages.drafting.vendor_supplier.check');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        // dd($data);
        $name1 = $request->file('file_deed_of_company')->getClientOriginalName();
        $name2 = $request->file('file_nib')->getClientOriginalName();
        $name3 = $request->file('file_npwp')->getClientOriginalName();
        $name4 = $request->file('file_business_permit')->getClientOriginalName();
        $name5 = $request->file('file_oss_location')->getClientOriginalName();
        $name6 = $request->file('file_director_id_card')->getClientOriginalName();
        $name7 = $request->file('file_sk')->getClientOriginalName();
        $name8 = $request->file('file_other')->getClientOriginalName();
        $name9 = $request->file('file_vendor_offer')->getClientOriginalName();
        $name10 = $request->file('file_mom')->getClientOriginalName();
        $name11 = $request->file('file_dispotition')->getClientOriginalName();
        $name12 = $request->file('file_agreement_draft')->getClientOriginalName();
        $name13 = $request->file('file_customer_entity')->getClientOriginalName();
        $name14 = $request->file('file_sk_menkumham')->getClientOriginalName();
        $name15 = $request->file('file_nib2')->getClientOriginalName();
        $name16 = $request->file('file_npwp2')->getClientOriginalName();
        $name17 = $request->file('file_business_permit')->getClientOriginalName();
        $name18 = $request->file('file_director_id_card2')->getClientOriginalName();
        $name19 = $request->file('file_other2')->getClientOriginalName();

        $data['user_id'] = auth()->user()->id;
        $data['file_deed_of_company'] = $request->file('file_deed_of_company')->storeAs('public/Drafting', $name1, 'public');
        $data['file_nib'] = $request->file('file_nib')->storeAs('public/Drafting', $name2, 'public');
        $data['file_npwp'] = $request->file('file_npwp')->storeAs('public/Drafting', $name3, 'public');
        $data['file_business_permit'] = $request->file('file_business_permit')->storeAs('public/Drafting', $name4, 'public');
        $data['file_oss_location'] = $request->file('file_oss_location')->storeAs('public/Drafting', $name5, 'public');
        $data['file_director_id_card'] = $request->file('file_director_id_card')->storeAs('public/Drafting', $name6, 'public');
        $data['file_sk'] = $request->file('file_sk')->storeAs('public/Drafting', $name7, 'public');
        $data['file_other'] = $request->file('file_other')->storeAs('public/Drafting', $name8, 'public');
        $data['file_vendor_offer'] = $request->file('file_vendor_offer')->storeAs('public/Drafting', $name9, 'public');
        $data['file_mom'] = $request->file('file_mom')->storeAs('public/Drafting', $name10, 'public');
        $data['file_dispotition'] = $request->file('file_dispotition')->storeAs('public/Drafting', $name11, 'public');
        $data['file_agreement_draft'] = $request->file('file_agreement_draft')->storeAs('public/Drafting', $name12, 'public');
        $data['file_customer_entity'] = $request->file('file_customer_entity')->storeAs('public/Drafting', $name13, 'public');
        $data['file_sk_menkumham'] = $request->file('file_sk_menkumham')->storeAs('public/Drafting', $name14, 'public');
        $data['file_nib2'] = $request->file('file_nib2')->storeAs('public/Drafting', $name15, 'public');
        $data['file_npwp2'] = $request->file('file_npwp2')->storeAs('public/Drafting', $name16, 'public');
        $data['file_business_permit2'] = $request->file('file_business_permit2')->storeAs('public/Drafting', $name17, 'public');
        $data['file_director_id_card2'] = $request->file('file_director_id_card2')->storeAs('public/Drafting', $name18, 'public');
        $data['file_other2'] = $request->file('file_other2')->storeAs('public/Drafting', $name19, 'public');
        // $save = new Permit();

        // $save->name = $name1;
        // $save->name = $name2;
        // $save->name = $name3;
        // $save->name = $name4;

        // $save->path = $path1;
        // $save->path = $path2;
        // $save->path = $path3;
        // $save->path = $path4;

        // UploadFile::create($validatedData2);
        VendorSupplier::create($data);

        return redirect()->route('vendor-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
