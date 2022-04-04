<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index()
    {
        return view('pages.regulation.index');
    }

    public function internal()
    {
        return view('pages.regulation.internal_regulation.index');
    }

    public function normative()
    {
        return view('pages.regulation.normative_regulation.index');
    }

    public function regulation_internal(Request $request)
    {
        $data = $request->all();

        if ($request->file('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file'] = 'Rule/'.$filename;
            $file->move('Rule', $filename);
        }

        Rule::create($data);

        return redirect()->route('regulation-internal')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }

    public function regulation_normative(Request $request)
    {
        $data = $request->all();

        if ($request->file('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file'] = 'Rule/'.$filename;
            $file->move('Rule', $filename);
        }

        Rule::create($data);

        return redirect()->route('regulation-normative')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
    }
}

