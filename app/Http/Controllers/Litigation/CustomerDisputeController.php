<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Http\Controllers\Controller;
use App\Models\Litigation\CustomerDispute;
use App\Models\Province;

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

        $name = time() . '-' . $request->file('file_connote')->getClientOriginalName();
        $name2 = time() . '-' . $request->file('file_orion')->getClientOriginalName();
        $name3 = time() . '-' . $request->file('file_pod')->getClientOriginalName();
        $name4 = time() . '-' . $request->file('file_customer_case_form')->getClientOriginalName();
        $name5 = time() . '-' . $request->file('file_destination_chronology')->getClientOriginalName();
        $name6 = time() . '-' . $request->file('file_orion_chronology')->getClientOriginalName();
        $name7 = time() . '-' . $request->file('file_cs_chronology')->getClientOriginalName();
        $name8 = time() . '-' . $request->file('file_subpoena')->getClientOriginalName();
        $name9 = time() . '-' . $request->file('file_cs_chronology')->getClientOriginalName();

        // $path = $request->file('file_witness_testimony')->store('public/files');
        // $path2= $request->file('file_letter_document')->store('public/files');
        // $path3 = $request->file('file_claim_form_document')->store('public/files');
        // $path4 = $request->file('file_other_document')->store('public/files');
        // $path5 = $request->file('file_evidence')->store('public/files');
        // $path6 = $request->file('file_document_completeness')->store('public/files');
        // $path7 = $request->file('file_other_evidence')->store('public/files');

        $validatedData['file_connote'] = $request->file('file_connote')->storeAs('public/litigation', $name, 'public');
        $validatedData['file_orion'] = $request->file('file_orion')->storeAs('public/litigation', $name2, 'public');
        $validatedData['file_pod'] = $request->file('file_pod')->storeAs('public/litigation', $name3, 'public');
        $validatedData['file_customer_case_form'] = $request->file('file_customer_case_form')->storeAs('public/litigation', $name4, 'public');
        $validatedData['file_destination_chronology'] = $request->file('file_destination_chronology')->storeAs('public/litigation', $name5, 'public');
        $validatedData['file_orion_chronology'] = $request->file('file_orion_chronology')->storeAs('public/litigation', $name6, 'public');
        $validatedData['file_cs_chronology'] = $request->file('file_cs_chronology')->storeAs('public/litigation', $name7, 'public');
        $validatedData['file_subpoena'] = $request->file('file_subpoena')->storeAs('public/litigation', $name8, 'public');
        $validatedData['file_procuration'] = $request->file('file_procuration')->storeAs('public/litigation', $name9, 'public');
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
