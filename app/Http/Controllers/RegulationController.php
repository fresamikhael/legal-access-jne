<?php

namespace App\Http\Controllers;

use App\Models\RegulationType;
use App\Models\Rule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RegulationController extends Controller
{
    public function index()
    {
        return view('pages.regulation.index');
    }

    public function internal()
    {
        if (request()->ajax())
        {

            $query = Rule::query()->where('rule_type', 'Regulasi Internal');
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($rule){
                    return '
                        <a href = "'.route('regulation-internal-detail',$rule->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.regulation.internal_regulation.index');
    }

    public function create_internal()
    {
        $type = RegulationType::query()->where('type', 'Regulasi Internal')->get();

        return view('pages.regulation.internal_regulation.create', [
            'type' => $type
        ]);
    }

    public function detail_internal($id)
    {
        $data = Rule::where('id', $id)->firstOrFail();

        return view('pages.regulation.internal_regulation.detail', [
            'data' => $data
        ]);
    }

    public function normative()
    {

        if (request()->ajax())
        {

            $query = Rule::query()->where('rule_type', 'Regulasi Normatif');
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($rule){
                    return '
                        <a href = "'.route('regulation-normative-detail',$rule->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.regulation.normative_regulation.index');
    }

    public function create_normative()
    {
        $type = RegulationType::query()->where('type', 'Regulasi Normatif')->get();

        return view('pages.regulation.normative_regulation.create', [
            'type' => $type
        ]);
    }

    public function detail_normative($id)
    {
        $data = Rule::where('id', $id)->firstOrFail();

        return view('pages.regulation.normative_regulation.detail', [
            'data' => $data
        ]);
    }

    public function regulation_internal(Request $request)
    {
        $data = $request->all();
        $data ['rule_type'] = 'Regulasi Internal';

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
        $data ['rule_type'] = 'Regulasi Normatif';

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

