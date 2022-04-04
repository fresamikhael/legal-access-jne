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
        switch ($request->input('action')) {
            case 'company_rules':
                // $data = $request->all();

                if ($request->file('company_rules')) {
                    $file = $request->file('company_rules');
                    $extension = $file->getClientOriginalExtension();
                    $filename = Str::random(40) . '.' . $extension;
                    $data['company_rules'] = 'Rule/'.$filename;
                    $file->move('Rule', $filename);
                }

                Rule::create([
                    'file' => $request->company_rules
                ]);

                return redirect()->route('regulation-internal')->with('message_success', 'Terima kasih atas pengajuan yang telah disampaikan. mohon untuk menunggu dikarenakan akan kami cek terlebih dahulu, mohon untuk dapat memeriksa pengajuan secara berkala.');
            break;

            case 'director_sk':
                $data = $request->all();

                if ($request->file('director_sk')) {
                    $file = $request->file('director_sk');
                    $extension = $file->getClientOriginalExtension();
                    $filename = Str::random(40) . '.' . $extension;
                    $data['director_sk'] = 'Rule/'.$filename;
                    $file->move('Rule', $filename);
                }

                Rule::create([
                    'file' => $request->director_sk
                ]);

                return redirect()->route('legal-lease-dashboard');
            break;

            case 'director_se':
                $data = $request->all();

                if ($request->file('director_se')) {
                    $file = $request->file('director_se');
                    $extension = $file->getClientOriginalExtension();
                    $filename = Str::random(40) . '.' . $extension;
                    $data['director_se'] = 'Rule/'.$filename;
                    $file->move('Rule', $filename);
                }

                Rule::create([
                    'file' => $request->director_se
                ]);

                return redirect()->route('legal-lease-dashboard');
            break;

            case 'internal_memo':
                $data = $request->all();

                if ($request->file('internal_memo')) {
                    $file = $request->file('internal_memo');
                    $extension = $file->getClientOriginalExtension();
                    $filename = Str::random(40) . '.' . $extension;
                    $data['internal_memo'] = 'Rule/'.$filename;
                    $file->move('Rule', $filename);
                }

                Rule::create([
                    'file' => $request->internal_memo
                ]);

                return redirect()->route('legal-lease-dashboard');
            break;
        }
    }
}

