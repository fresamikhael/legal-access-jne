<?php

namespace App\Http\Controllers\Permit;

use Carbon\Carbon;
use App\Models\UploadFile;
use App\Models\ReasonPermit;
use App\Models\StatusPermit;
use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PerizinanBaruController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Permit::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'PRM' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'PRM' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'PRM' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'PRM' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'PRM' . date('dmy') . $item;
            }
        }

        return view('pages.permit.perizinan_baru.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check($id)
    {
        $data = Permit::where('id', $id)->firstOrFail();
        return view('pages.permit.perizinan_baru.check', [
            'data' => $data
        ]);
    }

    public function approval($id)
    {
        $data = Permit::where('id', $id)->firstOrFail();
        return view('pages.permit.perizinan_baru.approval', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'permit_type' => 'required',
        //     'location' => 'required',
        //     'specification' => 'required',
        //     'application_reason' => 'required',
        //     'file_disposition' => 'required',
        //     'file_document1' => 'required',
        //     'file_document2' => 'required',
        //     'file_document3' => 'required',
        // ]);
        $data = $request->all();
        $id_permit = $data['id'];

        if ($request->file('file_disposition')) {
            $file = $request->file('file_disposition');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_disposition'] = 'Permit/'.$filename;
            $file->move('Permit', $filename); 
        }
        if ($request->file('file_document1')) {
            $file = $request->file('file_document1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_document1'] = 'Permit/'.$filename;
            $file->move('Permit', $filename); 
        }
        if ($request->file('file_document2')) {
            $file = $request->file('file_document2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_document2'] = 'Permit/'.$filename;
            $file->move('Permit', $filename); 
        }
        if ($request->file('file_document3')) {
            $file = $request->file('file_document3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_document3'] = 'Permit/'.$filename;
            $file->move('Permit', $filename); 
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
        Permit::create($data);

        return redirect()->route('home');
    }
}
