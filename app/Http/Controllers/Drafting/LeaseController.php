<?php

namespace App\Http\Controllers\Drafting;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Drafting\Lease;
use App\Http\Controllers\Controller;

class LeaseController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Lease::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'LS' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'LS' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'LS' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'LS' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'LS' . date('dmy') . $item;
            }
        }

        return view('pages.drafting.lease.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check()
    {
        return view('pages.drafting.lease.check');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $name1 = $request->file('file_director_disposition')->getClientOriginalName();
        $name2 = $request->file('file_internal_memo')->getClientOriginalName();
        $name3 = $request->file('file_id_card')->getClientOriginalName();
        $name4 = $request->file('file_npwp')->getClientOriginalName();
        $name5 = $request->file('file_kk')->getClientOriginalName();
        $name6 = $request->file('file_mariagge_book')->getClientOriginalName();
        $name7 = $request->file('file_director_id_card')->getClientOriginalName();
        $name8 = $request->file('file_deed')->getClientOriginalName();
        $name9 = $request->file('file_sk_menkumham')->getClientOriginalName();
        $name10 = $request->file('file_business_permit')->getClientOriginalName();
        $name11 = $request->file('file_nib')->getClientOriginalName();
        $name12 = $request->file('file_npwp_company')->getClientOriginalName();
        $name13 = $request->file('file_location_permit')->getClientOriginalName();
        $name14 = $request->file('file_setificate')->getClientOriginalName();
        $name15 = $request->file('file_imb')->getClientOriginalName();
        $name16 = $request->file('file_sppt1')->getClientOriginalName();
        $name17 = $request->file('file_sppt2')->getClientOriginalName();
        $name18 = $request->file('file_sppt3')->getClientOriginalName();
        $name19 = $request->file('file_procuration')->getClientOriginalName();
        $name20 = $request->file('file_previous_agreement')->getClientOriginalName();
        $name21 = $request->file('file_director_procuration')->getClientOriginalName();

        $data['file_director_disposition'] = $request->file('file_director_disposition')->storeAs('public/Drafting', $name1, 'public');
        $data['file_internal_memo'] = $request->file('file_internal_memo')->storeAs('public/Drafting', $name2, 'public');
        $data['file_id_card'] = $request->file('file_id_card')->storeAs('public/Drafting', $name3, 'public');
        $data['file_npwp'] = $request->file('file_npwp')->storeAs('public/Drafting', $name4, 'public');
        $data['file_kk'] = $request->file('file_kk')->storeAs('public/Drafting', $name5, 'public');
        $data['file_mariagge_book'] = $request->file('file_mariagge_book')->storeAs('public/Drafting', $name6, 'public');
        $data['file_director_id_card'] = $request->file('file_director_id_card')->storeAs('public/Drafting', $name7, 'public');
        $data['file_deed'] = $request->file('file_deed')->storeAs('public/Drafting', $name8, 'public');
        $data['file_sk_menkumham'] = $request->file('file_sk_menkumham')->storeAs('public/Drafting', $name9, 'public');
        $data['file_business_permit'] = $request->file('file_business_permit')->storeAs('public/Drafting', $name10, 'public');
        $data['file_nib'] = $request->file('file_nib')->storeAs('public/Drafting', $name11, 'public');
        $data['file_npwp_company'] = $request->file('file_npwp_company')->storeAs('public/Drafting', $name12, 'public');
        $data['file_location_permit'] = $request->file('file_location_permit')->storeAs('public/Drafting', $name13, 'public');
        $data['file_setificate'] = $request->file('file_setificate')->storeAs('public/Drafting', $name14, 'public');
        $data['file_imb'] = $request->file('file_imb')->storeAs('public/Drafting', $name15, 'public');
        $data['file_sppt1'] = $request->file('file_sppt1')->storeAs('public/Drafting', $name16, 'public');
        $data['file_sppt2'] = $request->file('file_sppt2')->storeAs('public/Drafting', $name17, 'public');
        $data['file_sppt3'] = $request->file('file_sppt3')->storeAs('public/Drafting', $name18, 'public');
        $data['file_procuration'] = $request->file('file_procuration')->storeAs('public/Drafting', $name19, 'public');
        $data['file_previous_agreement'] = $request->file('file_previous_agreement')->storeAs('public/Drafting', $name20, 'public');
        $data['file_director_procuration'] = $request->file('file_director_procuration')->storeAs('public/Drafting', $name21, 'public');

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
        Lease::create($data);

        return redirect()->route('home');
    }
}
