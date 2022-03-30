<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Http\Controllers\Controller;
use App\Models\Litigation\Outstanding;
use App\Models\Province;
use Illuminate\Support\Str;

class OutstandingController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Outstanding::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'OUT' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'OUT' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'OUT' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'OUT' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'OUT' . date('dmy') . $item;
            }
        }

        $province = Province::get();

        return view('pages.litigation.outstanding.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow,
            'province' => $province
        ]);
    }

    public function check()
    {
        return view('pages.litigation.outstanding.check');
    }

    public function report()
    {
        return view('pages.litigation.outstanding.report');
    }

    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'id' => 'required',
        //     'user_id' => 'required',
        //     'date' => 'required',
        //     'company_name' => 'required',
        //     'department' => 'required',
        //     'agreement_number' => 'required',
        //     'total_outstanding' => 'required',
        //     'from_date' => 'required',
        //     'till_date' => 'required',
        //     'incident_chronology' => 'required',
        //     'file_data_recap' => 'required',
        //     'file_document_proof' => 'required',
        //     'file_agreement' => 'required',
        //     'file_billing_proof' => 'required',
        //     'file_disposition' => 'required',
        //     'file_other_document' => 'required',
        // ]);
        #
        // $validatedData2 = $request->validate([
        //     // 'id' => 'required',

        $validatedData = $request->all();
        // dd($validatedData);

        // dd($validatedData);
        // ]);
        // $validatedData[;'']
        // $data = $request->all();
        $id = $validatedData['id'];
        $user_id = $request->user_id;

        if ($request->file('file_pcrf')) {
            $file = $request->file('file_pcrf');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_pcrf'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_recapitulation')) {
            $file = $request->file('file_recapitulation');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_recapitulation'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_packing_list')) {
            $file = $request->file('file_packing_list');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_packing_list'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_billing_proof')) {
            $file = $request->file('file_billing_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_billing_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_deed_company')) {
            $file = $request->file('file_deed_company');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_deed_company'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_nib')) {
            $file = $request->file('file_nib');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_nib'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }

        // $path = $request->file('file_document')->store('public/files');
        // $path2= $request->file('file_proof1')->store('public/files');
        // $path3 = $request->file('file_proof2')->store('public/files');
        // $path4 = $request->file('file_proof3')->store('public/files');
        // $path5 = $request->file('file_disposition')->store('public/files');
        // $path6 = $request->file('file_other_document')->store('public/files');

        // $save = new Other;

        // $save->name = $name;
        // $save->name = $name2;
        // $save->name = $name3;
        // $save->name = $name4;
        // $save->name = $name5;
        // $save->name = $name6;

        // $save->path = $path;
        // $save->path = $path2;
        // $save->path = $path3;
        // $save->path = $path4;
        // $save->path = $path5;
        // $save->path = $path6;

        // UploadFile::create($validatedData2);
        Outstanding::create($validatedData);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('outstanding-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
