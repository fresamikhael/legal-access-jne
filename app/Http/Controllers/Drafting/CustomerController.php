<?php

namespace App\Http\Controllers\Drafting;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Drafting\Customer;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Customer::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'CS' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'CS' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'CS' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'CS' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'CS' . date('dmy') . $item;
            }
        }

        $province = Province::get();

        return view('pages.drafting.customer.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow,
            'province' => $province
        ]);
    }

    public function check()
    {
        return view('pages.drafting.customer.check');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        // $validatedData = $request->validate([
        //     'id' => 'required',
        //     'user_id' => 'required',
        //     'first_party' => 'required',
        //     'second_party' => 'required',
        //     'third_party' => 'required',
        //     'agreement_draft' => 'required',
        //     'addendum' => 'required',
        //     'customer_type' => 'required',
        //     'assurance_goods' => 'required',
        //     'compensation' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'discount' => 'required',
        //     'other_point' => 'required',
        //     'shipping_type' => 'required',
        //     'shipping_type_description' => 'required',
        //     'file_mom' => 'required',
        //     'file_agreement_draft' => 'required',
        //     'file_claim_form' => 'required',
        //     'file_sk_menkumham' => 'required',
        //     'file_nib' => 'required',
        //     'file_npwp' => 'required',
        //     'file_business_permit	' => 'required',
        //     'file_npwp' => 'required',
        //     'file_business_permit	' => 'required',
        //     'file_other' => 'required',
        //     'status' => 'required',
        // ]);
        #

        if ($request->file('file_mom')) {
            $file = $request->file('file_mom');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_mom'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_agreement_draft')) {
            $file = $request->file('file_agreement_draft');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_agreement_draft'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_claim_form')) {
            $file = $request->file('file_claim_form');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_claim_form'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_nib')) {
            $file = $request->file('file_nib');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_nib'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_npwp')) {
            $file = $request->file('file_npwp');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_npwp'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_business_permit')) {
            $file = $request->file('file_business_permit');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_business_permit'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_director_id_card')) {
            $file = $request->file('file_director_id_card');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_director_id_card'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_other')) {
            $file = $request->file('file_other');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_deed_of_company')) {
            $file = $request->file('file_deed_of_company');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_deed_of_company'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_oss_location')) {
            $file = $request->file('file_oss_location');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_oss_location'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        if ($request->file('file_sk')) {
            $file = $request->file('file_sk');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_sk'] = 'Drafting/'.$filename;
            $file->move('Drafting', $filename); 
        }

        $data['user_id'] = auth()->user()->id; 
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
        Customer::create($data);

        return redirect()->route('customer-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
