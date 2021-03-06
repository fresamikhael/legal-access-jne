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
        $user_id = $request->user_id;

        $data = $request->all();

        $id = $data['id'];

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

        CustomerDispute::create($data);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('customer-dispute-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
