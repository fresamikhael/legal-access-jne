<?php

namespace App\Http\Controllers\Litigation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Litigation\Cs;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class TeamCsController extends Controller
{

    public function index()
    {
        if (request()->ajax()) {
            $cs = 'CS';
            $name = 'LEGAL MANAGER';
            $form = 'CD';
            $query = Cs::query()->with('customer_dispute')->where('form_id', 'LIKE', '%' . $form . '%');
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($cs) {
                    if ($cs->status == 'PENDING') {
                        return '
                        <a href = "' . route('cs-update-customer-dispute', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </a>
                    ';
                    } elseif ($cs->status == 'Lewat >3 Bulan') {
                        return '
                        <a href = "' . route('cs-update-customer-dispute', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Open
                            </button>
                        </a>
                    ';
                    } else {
                        return '
                        <a href = "' . route('cs-finish', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Finish
                            </button>
                        </a>
                        <a href = "' . route('cs-close', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Close
                            </button>
                        </a>
                    ';
                    }
                })

                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.litigation.team-cs.index');
    }

    public function table_fraud()
    {
        if (request()->ajax()) {
            $cs = 'CS';
            $name = 'LEGAL MANAGER';
            $form = 'FR';
            $query = Cs::query()->with('fraud')->where('form_id', 'LIKE', '%' . $form . '%');
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($cs) {
                    if ($cs->status == 'PENDING') {
                        return '
                        <a href = "' . route('cs-update-fraud', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </a>
                    ';
                    } elseif ($cs->status == 'Lewat >3 Bulan') {
                        return '
                        <a href = "' . route('cs-update-fraud', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Open
                            </button>
                        </a>
                    ';
                    } else {
                        return '
                        <a href = "' . route('cs-finish', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Finish
                            </button>
                        </a>
                        <a href = "' . route('cs-close', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Close
                            </button>
                        </a>
                    ';
                    }
                })

                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.litigation.team-cs.index');
    }

    public function table_outstanding()
    {
        if (request()->ajax()) {
            $cs = 'CS';
            $name = 'LEGAL MANAGER';
            $form = 'OUT';
            $query = Cs::query()->with('outstanding')->where('form_id', 'LIKE', '%' . $form . '%');
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($cs) {
                    if ($cs->status == 'PENDING') {
                        return '
                        <a href = "' . route('cs-update-outstanding', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </a>
                    ';
                    } elseif ($cs->status == 'Lewat >3 Bulan') {
                        return '
                        <a href = "' . route('cs-update-outstanding', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Open
                            </button>
                        </a>
                    ';
                    } else {
                        return '
                        <a href = "' . route('cs-finish', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Finish
                            </button>
                        </a>
                        <a href = "' . route('cs-close', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Close
                            </button>
                        </a>
                    ';
                    }
                })

                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.litigation.team-cs.index');
    }

    public function table_other()
    {
        if (request()->ajax()) {
            $cs = 'CS';
            $name = 'LEGAL MANAGER';
            $form = 'OTH';
            $query = Cs::query()->with('other')->where('form_id', 'LIKE', '%' . $form . '%');
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($cs) {
                    if ($cs->status == 'PENDING') {
                        return '
                        <a href = "' . route('cs-update-other', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </a>
                    ';
                    } elseif ($cs->status == 'Lewat >3 Bulan') {
                        return '
                        <a href = "' . route('cs-update-other', $cs->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Open
                            </button>
                        </a>
                    ';
                    } else {
                        return '
                        <a href = "' . route('cs-finish', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Finish
                            </button>
                        </a>
                        <a href = "' . route('cs-close', $cs->id) . '">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Close
                            </button>
                        </a>
                    ';
                    }
                })

                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.litigation.team-cs.index');
    }

    public function updateCustomer($id)
    {
        $data = Cs::with(['other', 'fraud', 'customer_dispute', 'outstanding'])->where('id', $id)->firstOrFail();
        return view('pages.litigation.customer_dispute.check', [
            'data' => $data
        ]);
    }

    public function updateCustomerPost(Request $request, $id)
    {
        $data = $request->all();

        $item = Cs::findOrFail($id);

        if ($request->file('file_consumer_dispute_case_form')) {
            $file = $request->file('file_consumer_dispute_case_form');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_consumer_dispute_case_form'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_operational_delivery_chronology')) {
            $file = $request->file('file_operational_delivery_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_operational_delivery_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_cs_handling_chronology')) {
            $file = $request->file('file_cs_handling_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_cs_handling_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_pod_evidence')) {
            $file = $request->file('file_pod_evidence');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_pod_evidence'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_receipt_proof')) {
            $file = $request->file('file_receipt_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_receipt_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation1')) {
            $file = $request->file('file_proof_of_documentation1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation1'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation2')) {
            $file = $request->file('file_proof_of_documentation2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation2'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation3')) {
            $file = $request->file('file_proof_of_documentation3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation3'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_other_supporting_document')) {
            $file = $request->file('file_other_supporting_document');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other_supporting_document'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }

        $item->update([
            'file_consumer_dispute_case_form' => $data['file_consumer_dispute_case_form'],
            'file_operational_delivery_chronology' => $data['file_operational_delivery_chronology'],
            'file_cs_handling_chronology' => $data['file_cs_handling_chronology'],
            'file_pod_evidence' => $data['file_pod_evidence'],
            'file_receipt_proof' => $data['file_receipt_proof'],
            'file_proof_of_documentation1' => $data['file_proof_of_documentation1'],
            'file_proof_of_documentation2' => $data['file_proof_of_documentation2'],
            'file_proof_of_documentation3' => $data['file_proof_of_documentation3'],
            'file_other_supporting_document' => $data['file_other_supporting_document'],
            'nominal_indemnity_offer' => $data['nominal_indemnity_offer'],
            'status' => 'DILENGKAPI OLEH CS'
        ]);

        return redirect()->route('team-cs-dashboard');
    }

    public function updateFraud($id)
    {
        $data = Cs::with(['other', 'fraud', 'customer_dispute', 'outstanding'])->where('id', $id)->firstOrFail();
        return view('pages.litigation.fraud.check', [
            'data' => $data
        ]);
    }

    public function updateFraudPost(Request $request, $id)
    {
        $data = $request->all();

        $item = Cs::findOrFail($id);

        if ($request->file('file_consumer_dispute_case_form')) {
            $file = $request->file('file_consumer_dispute_case_form');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_consumer_dispute_case_form'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_operational_delivery_chronology')) {
            $file = $request->file('file_operational_delivery_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_operational_delivery_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_cs_handling_chronology')) {
            $file = $request->file('file_cs_handling_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_cs_handling_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_pod_evidence')) {
            $file = $request->file('file_pod_evidence');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_pod_evidence'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_receipt_proof')) {
            $file = $request->file('file_receipt_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_receipt_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation1')) {
            $file = $request->file('file_proof_of_documentation1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation1'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation2')) {
            $file = $request->file('file_proof_of_documentation2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation2'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation3')) {
            $file = $request->file('file_proof_of_documentation3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation3'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_other_supporting_document')) {
            $file = $request->file('file_other_supporting_document');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other_supporting_document'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }

        $item->update([
            'file_consumer_dispute_case_form' => $data['file_consumer_dispute_case_form'],
            'file_operational_delivery_chronology' => $data['file_operational_delivery_chronology'],
            'file_cs_handling_chronology' => $data['file_cs_handling_chronology'],
            'file_pod_evidence' => $data['file_pod_evidence'],
            'file_receipt_proof' => $data['file_receipt_proof'],
            'file_proof_of_documentation1' => $data['file_proof_of_documentation1'],
            'file_proof_of_documentation2' => $data['file_proof_of_documentation2'],
            'file_proof_of_documentation3' => $data['file_proof_of_documentation3'],
            'file_other_supporting_document' => $data['file_other_supporting_document'],
            'nominal_indemnity_offer' => $data['nominal_indemnity_offer'],
            'status' => 'DILENGKAPI OLEH CS'
        ]);

        return redirect()->route('team-cs-dashboard');
    }

    public function updateOutstanding($id)
    {
        $data = Cs::with(['other', 'fraud', 'customer_dispute', 'outstanding'])->where('id', $id)->firstOrFail();
        return view('pages.litigation.outstanding.check', [
            'data' => $data
        ]);
    }

    public function updateOutstandingPost(Request $request, $id)
    {
        $data = $request->all();

        $item = Cs::findOrFail($id);

        if ($request->file('file_consumer_dispute_case_form')) {
            $file = $request->file('file_consumer_dispute_case_form');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_consumer_dispute_case_form'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_operational_delivery_chronology')) {
            $file = $request->file('file_operational_delivery_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_operational_delivery_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_cs_handling_chronology')) {
            $file = $request->file('file_cs_handling_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_cs_handling_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_pod_evidence')) {
            $file = $request->file('file_pod_evidence');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_pod_evidence'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_receipt_proof')) {
            $file = $request->file('file_receipt_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_receipt_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation1')) {
            $file = $request->file('file_proof_of_documentation1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation1'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation2')) {
            $file = $request->file('file_proof_of_documentation2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation2'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation3')) {
            $file = $request->file('file_proof_of_documentation3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation3'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_other_supporting_document')) {
            $file = $request->file('file_other_supporting_document');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other_supporting_document'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }

        $item->update([
            'file_consumer_dispute_case_form' => $data['file_consumer_dispute_case_form'],
            'file_operational_delivery_chronology' => $data['file_operational_delivery_chronology'],
            'file_cs_handling_chronology' => $data['file_cs_handling_chronology'],
            'file_pod_evidence' => $data['file_pod_evidence'],
            'file_receipt_proof' => $data['file_receipt_proof'],
            'file_proof_of_documentation1' => $data['file_proof_of_documentation1'],
            'file_proof_of_documentation2' => $data['file_proof_of_documentation2'],
            'file_proof_of_documentation3' => $data['file_proof_of_documentation3'],
            'file_other_supporting_document' => $data['file_other_supporting_document'],
            'nominal_indemnity_offer' => $data['nominal_indemnity_offer'],
            'status' => 'DILENGKAPI OLEH CS'
        ]);

        return redirect()->route('team-cs-dashboard');
    }

    public function updateOther($id)
    {
        $data = Cs::with(['other', 'fraud', 'customer_dispute', 'outstanding'])->where('id', $id)->firstOrFail();
        return view('pages.litigation.other.check', [
            'data' => $data
        ]);
    }

    public function updateOtherPost(Request $request, $id)
    {
        $data = $request->all();

        // $validatedData = $request->validate([
        //     'file_consumer_dispute_case_form' => 'required',
        //     'file_operational_delivery_chronology' => 'required',
        //     'file_cs_handling_chronology' => 'required',
        //     'file_pod_evidence' => 'required',
        //     'file_receipt_proof' => 'required',
        //     'file_proof_of_documentation1' => 'required',
        //     'file_proof_of_documentation2' => 'required',
        //     'file_proof_of_documentation3' => 'required',
        //     'file_other_supporting_document' => 'required',
        //     'nominal_indemnity_offer' => 'required',
        //     // 'status' => 'DILENGKAPI OLEH CS'

        // ]);

        $item = Cs::findOrFail($id);

        if ($request->file('file_consumer_dispute_case_form')) {
            $file = $request->file('file_consumer_dispute_case_form');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_consumer_dispute_case_form'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_operational_delivery_chronology')) {
            $file = $request->file('file_operational_delivery_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_operational_delivery_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_cs_handling_chronology')) {
            $file = $request->file('file_cs_handling_chronology');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_cs_handling_chronology'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_pod_evidence')) {
            $file = $request->file('file_pod_evidence');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_pod_evidence'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_receipt_proof')) {
            $file = $request->file('file_receipt_proof');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_receipt_proof'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation1')) {
            $file = $request->file('file_proof_of_documentation1');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation1'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation2')) {
            $file = $request->file('file_proof_of_documentation2');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation2'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_of_documentation3')) {
            $file = $request->file('file_proof_of_documentation3');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_of_documentation3'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_other_supporting_document')) {
            $file = $request->file('file_other_supporting_document');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_other_supporting_document'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }

        $item->update([
            'file_consumer_dispute_case_form' => $data['file_consumer_dispute_case_form'],
            'file_operational_delivery_chronology' => $data['file_operational_delivery_chronology'],
            'file_cs_handling_chronology' => $data['file_cs_handling_chronology'],
            'file_pod_evidence' => $data['file_pod_evidence'],
            'file_receipt_proof' => $data['file_receipt_proof'],
            'file_proof_of_documentation1' => $data['file_proof_of_documentation1'],
            'file_proof_of_documentation2' => $data['file_proof_of_documentation2'],
            'file_proof_of_documentation3' => $data['file_proof_of_documentation3'],
            'file_other_supporting_document' => $data['file_other_supporting_document'],
            'nominal_indemnity_offer' => $data['nominal_indemnity_offer'],
            'status' => 'DILENGKAPI OLEH CS'
        ]);

        return redirect()->route('team-cs-dashboard');
    }

    public function finish($id)
    {
        $data = Cs::where('id', $id)->firstOrFail();
        return view('pages.litigation.team-cs.finish', [
            'data' => $data
        ]);
    }

    public function finishPost(Request $request, $id)
    {
        $user = auth()->user()->name;
        $data = $request->all();

        $item = Cs::findOrFail($id);

        // if($request->file('file_response_letter'))
        // dd($data['file_response_letter']);
        if ($request->file('file_response_letter')) {
            $file = $request->file('file_response_letter');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_response_letter'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        if ($request->file('file_proof_shipment')) {
            $file = $request->file('file_proof_shipment');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_proof_shipment'] = 'Litigation/'.$filename;
            $file->move('Litigation', $filename); 
        }
        $item->update([
            'file_response_letter' => $data['file_response_letter'],
            'file_proof_shipment' => $data['file_proof_shipment'],
            'status' => 'FINISHED BY ' . $user . ' TEAM CS'
        ]);

        return redirect()->route('team-cs-dashboard');
    }

    public function close($id)
    {
        $data = Cs::where('id', $id)->firstOrFail();
        return view('pages.litigation.team-cs.close', [
            'data' => $data
        ]);
    }

    public function closePost(Request $request, $id)
    {
        $user = auth()->user()->name;
        $data = $request->all();

        $item = Cs::findOrFail($id);

        // if($request->file('file_response_letter'))
        // dd($data['file_response_letter']);
        if ($request->file('file_acceptance_letter')) {
            $file = $request->file('file_acceptance_letter');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_acceptance_letter'] = 'file_invoice/'.$filename;
            $file->move('file_invoice', $filename); 
        }
        if ($request->file('file_case_report')) {
            $file = $request->file('file_case_report');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_case_report'] = 'file_invoice/'.$filename;
            $file->move('file_invoice', $filename); 
        }
        if ($request->file('file_invoice')) {
            $file = $request->file('file_invoice');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '.' . $extension;
            $data['file_invoice'] = 'file_invoice/'.$filename;
            $file->move('file_invoice', $filename); 
        }
        
        $item->update([
            'file_acceptance_letter' => $data['file_acceptance_letter'],
            'file_case_report' => $data['file_case_report'],
            'file_invoice' => $data['file_invoice'],
            'status' => $request->status
        ]);

        return redirect()->route('team-cs-dashboard');
    }
}
