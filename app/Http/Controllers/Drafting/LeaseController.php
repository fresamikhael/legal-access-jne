<?php

namespace App\Http\Controllers\Drafting;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Drafting\Lease;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Support\Str;

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

        $province = Province::get();

        return view('pages.drafting.lease.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow,
            'province' => $province
        ]);
    }

    public function check()
    {
        return view('pages.drafting.lease.check');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file('file_director_disposition')) {
            $file = $request->file('file_director_disposition');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_director_disposition'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_internal_memo')) {
            $file = $request->file('file_internal_memo');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_internal_memo'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_internal_memo_optional')) {
            $file = $request->file('file_internal_memo_optional');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_internal_memo_optional'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_id_card')) {
            $file = $request->file('file_id_card');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_id_card'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_npwp')) {
            $file = $request->file('file_npwp');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_npwp'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_kk')) {
            $file = $request->file('file_kk');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_kk'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_mariagge_book')) {
            $file = $request->file('file_mariagge_book');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_mariagge_book'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_director_id_card')) {
            $file = $request->file('file_director_id_card');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_director_id_card'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_deed')) {
            $file = $request->file('file_deed');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_deed'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_sk_menkumham')) {
            $file = $request->file('file_sk_menkumham');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_sk_menkumham'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_business_permit')) {
            $file = $request->file('file_business_permit');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_business_permit'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_nib')) {
            $file = $request->file('file_nib');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_nib'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_npwp_company')) {
            $file = $request->file('file_npwp_company');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_npwp_company'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_location_permit')) {
            $file = $request->file('file_location_permit');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_location_permit'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_setificate')) {
            $file = $request->file('file_setificate');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_setificate'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_sppt1')) {
            $file = $request->file('file_sppt1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_sppt1'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_sppt2')) {
            $file = $request->file('file_sppt2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_sppt2'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_sppt3')) {
            $file = $request->file('file_sppt3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_sppt3'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_procuration')) {
            $file = $request->file('file_procuration');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_procuration'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_previous_agreement')) {
            $file = $request->file('file_previous_agreement');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_previous_agreement'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_others_1')) {
            $file = $request->file('file_others_1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_others_1'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_others_2')) {
            $file = $request->file('file_others_2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_others_2'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_others_3')) {
            $file = $request->file('file_others_3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_others_3'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }
        
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

        return redirect()->route('lease-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
