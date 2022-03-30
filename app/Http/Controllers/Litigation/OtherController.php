<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use App\Models\UploadFile;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Models\Litigation\Other;
use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Support\Str;

class OtherController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Other::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'OTH' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'OTH' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'OTH' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'OTH' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'OTH' . date('dmy') . $item;
            }
        }

        $province = Province::get();

        return view('pages.litigation.other.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow,
            'province' => $province
        ]);
    }

    public function check()
    {
        return view('pages.litigation.other.check');
    }

    public function report()
    {
        return view('pages.litigation.other.report');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $user_id = $request->user_id;

        if ($request->file('file_document')) {
            $file = $request->file('file_document');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_document'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename);
        }

        if ($request->file('file_proof')) {
            $file = $request->file('file_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename);
        }

        Other::create($data);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('other-index')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}
