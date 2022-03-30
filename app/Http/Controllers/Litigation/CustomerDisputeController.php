<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Http\Controllers\Controller;
use App\Models\Litigation\CustomerDispute;
use App\Models\Province;
use Illuminate\Support\Str;

class CustomerDisputeController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = CustomerDispute::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'CD' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'CD' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'CD' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'CD' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'CD' . date('dmy') . $item;
            }
        }

        $province = Province::get();

        return view('pages.litigation.customer_dispute.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow,
            'province' => $province
        ]);
    }

    public function check()
    {
        return view('pages.litigation.customer_dispute.check');
    }

    public function report()
    {
        return view('pages.litigation.customer_dispute.report');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $id = $data['id'];
        $user_id = $request->user_id;

        $validatedData = $request->all();

        // $validatedData = $request->validate([
        //     'id' => 'required',
        //     'user_id' => 'required',
        //     'date' => 'required',
        //     'case_type' => 'required',
        //     'causative_factor' => 'required',
        //     'causative_factor_others' => '',
        //     'total_loss' => 'required',
        //     'connote' => 'required',
        //     'incident_date' => 'required',
        //     'customer' => 'required',
        //     'shipping_type' => 'required',
        //     'assurance' => 'required',
        //     'incident_chronology' => 'required',
        //     'shipping_form' => 'required',
        //     'detail_shipping_form' => 'required',
        //     'file_witness_testimony' => 'required',
        //     'file_letter_document' => 'required',
        //     'file_claim_form_document' => 'required',
        //     'file_other_document' => 'required',
        //     'file_evidence' => 'required',
        //     'file_document_completeness' => 'required',
        //     'file_other_evidence' => 'required',
        // ]);
        #
        $id = $validatedData['id'];
        // $validatedData2 = $request->validate([
        //     // 'id' => 'required',

        // ]);
        // $validatedData[;'']

        // $data = $request->all();

        if ($request->file('file_connote')) {
            $file = $request->file('file_connote');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_connote'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_orion')) {
            $file = $request->file('file_orion');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_orion'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_pod')) {
            $file = $request->file('file_pod');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_pod'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_customer_case_form')) {
            $file = $request->file('file_customer_case_form');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_customer_case_form'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_destination_chronology')) {
            $file = $request->file('file_destination_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_destination_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_orion_chronology')) {
            $file = $request->file('file_orion_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_orion_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_cs_chronology')) {
            $file = $request->file('file_cs_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_cs_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_subpoena')) {
            $file = $request->file('file_subpoena');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_subpoena'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_cs_chronology')) {
            $file = $request->file('file_cs_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_cs_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }

        // $path = $request->file('file_witness_testimony')->store('public/files');
        // $path2= $request->file('file_letter_document')->store('public/files');
        // $path3 = $request->file('file_claim_form_document')->store('public/files');
        // $path4 = $request->file('file_other_document')->store('public/files');
        // $path5 = $request->file('file_evidence')->store('public/files');
        // $path6 = $request->file('file_document_completeness')->store('public/files');
        // $path7 = $request->file('file_other_evidence')->store('public/files');

        // $save = new CustomerDispute;

        // $save->name = $name;
        // $save->name = $name2;
        // $save->name = $name3;
        // $save->name = $name4;
        // $save->name = $name5;
        // $save->name = $name6;
        // $save->name = $name7;

        // $save->path = $path;
        // $save->path = $path2;
        // $save->path = $path3;
        // $save->path = $path4;
        // $save->path = $path5;
        // $save->path = $path6;
        // $save->path = $path7;

        // UploadFile::create($validatedData2);
        CustomerDispute::create($validatedData);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('customer-dispute-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
