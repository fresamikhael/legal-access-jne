<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use App\Models\Drafting\Lease;
use App\Models\FileRegulation;
use App\Models\Litigation\Fraud;
use App\Models\Litigation\Other;
use App\Models\Drafting\Customer;
use App\Models\Litigation\Outstanding;
use App\Models\Drafting\VendorSupplier;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Litigation\CustomerDispute;

class DatabaseController extends Controller
{
    public function index()
    {
        $regulation = Regulation::orderBy('year', 'DESC')
            ->orderBy('name', 'ASC')
            ->filter(request(['name', 'number', 'year', 'title']))
            ->paginate(10);

        return view('pages.database.index', ["regulation" => $regulation]);
    }

    public function detail($id)
    {
        $regulation = Regulation::where('id', $id)
            ->first();

        return view('pages.database.detail.detail', ["regulation" => $regulation]);
    }

    public function dataVendor()
    {
        if (request()->ajax())
        {

            $query = VendorSupplier::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function dataLease()
    {
        if (request()->ajax())
        {

            $query = Lease::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function dataCustomerDispute()
    {
        if (request()->ajax())
        {

            $query = CustomerDispute::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function dataFraud()
    {
        if (request()->ajax())
        {

            $query = Fraud::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function dataOutstanding()
    {
        if (request()->ajax())
        {

            $query = Outstanding::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function dataOther()
    {
        if (request()->ajax())
        {

            $query = Other::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function dataPerizinan()
    {
        if (request()->ajax())
        {

            $query = Permit::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.database.index');
    }

    public function create()
    {
        return view('pages.database.create');
    }

    public function store(Request $request)
    {
        $regulation = Regulation::create([
            'name' => $request->name,
            'type' => $request->type,
            'entity' => $request->entity,
            'number' => $request->number,
            'year' => $request->year,
            'title' => $request->title,
            'set_date' => $request->set_date,
            'promulgated_date' => $request->promulgated_date,
            'valid_date' => $request->valid_date,
            'source' => $request->source,
            'status' => $request->status,
        ]);

        $files = $request->file('file');

        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '-' . '.' . $extension;
            $file->move('regulation', $filename);

            FileRegulation::create([
                'regulation_id' => $regulation->id,
                'file' => 'regulation/'.$filename
            ]);
        }

        return redirect()->route('database');
    }
}
