<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use App\Models\Litigation\Cs;
use App\Models\Litigation\Fraud;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FraudController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Fraud::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'FR' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'FR' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'FR' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'FR' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'FR' . date('dmy') . $item;
            }
        }

        return view('pages.litigation.fraud.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check()
    {
        return view('pages.litigation.fraud.check');
    }

    public function report()
    {
        return view('pages.litigation.fraud.report');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'case_type' => 'required',
            'causative_factor' => 'required',
            'perpetrator' => 'required',
            'unit' => 'required',
            'total_loss' => 'required',
            'incident_date' => 'required',
            'incident_scane' => 'required',
            'incident_chronology' => 'required',
            'fraud_classification' => 'required',
            'witness1' => 'required',
            'witness1_department' => 'required',
            'witness2' => 'required',
            'witness2_department' => 'required',
            'file_document_proof' => 'required',
            'file_perpetrator_statement' => 'required',
            'file_witness_statement' => 'required',
            'file_other' => 'required',
            'file_evidence_documentation' => 'required',
            'file_investigation_document' => 'required',
            'file_other_evidence' => 'required',
        ]);
        // $data = $request->all();
        $id = $validatedData['id'];
        $user_id = $request->user_id;

        if ($request->file('file_document_proof')) {
            $file = $request->file('file_document_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_document_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_perpetrator_statement')) {
            $file = $request->file('file_perpetrator_statement');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_perpetrator_statement'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_witness_statement')) {
            $file = $request->file('file_witness_statement');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_witness_statement'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_other')) {
            $file = $request->file('file_other');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_evidence_documentation')) {
            $file = $request->file('file_evidence_documentation');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_evidence_documentation'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_investigation_document')) {
            $file = $request->file('file_investigation_document');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_investigation_document'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_other_evidence')) {
            $file = $request->file('file_other_evidence');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other_evidence'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
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
        Fraud::create($validatedData);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('fraud-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');;
    }
}
