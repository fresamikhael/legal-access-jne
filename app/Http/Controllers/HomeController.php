<?php

namespace App\Http\Controllers;

use App\Models\Drafting\Customer;
use App\Models\Drafting\Lease;
use App\Models\Drafting\VendorSupplier;
use App\Models\Litigation\CustomerDispute;
use App\Models\Litigation\Fraud;
use App\Models\Litigation\Other;
use App\Models\Litigation\Outstanding;
use App\Models\Permit\Permit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $customer_submission = Customer::count();
        $vendor_submission = VendorSupplier::count();
        $lease_submission = Lease::count();
        $custdis_submission = CustomerDispute::count();
        $fraud_submission = Fraud::count();
        $outstanding_submission = Outstanding::count();
        $other_submission = Other::count();
        $permit_submission = Permit::count();

        $total_submission = $customer_submission + $vendor_submission + $lease_submission + $custdis_submission + $fraud_submission + $outstanding_submission + $other_submission + $permit_submission;
        // dd(auth()->user());
        if (auth()->user()->role == 'ADMIN') {
            return redirect()->route('admin-dashboard');
        } elseif (auth()->user()->role == 'LEGALPERMIT') {
            return redirect()->route('legal-permit-dashboard');
        } elseif (auth()->user()->role == 'TEAMCS') {
            return redirect()->route('team-cs-dashboard');
        } elseif (auth()->user()->role == 'LEGALLITIGASI1') {
            return redirect()->route('legal1-dashboard');
        } elseif (auth()->user()->role == 'LEGALLITIGASI2') {
            return redirect()->route('legal2-dashboard');
        } elseif (auth()->user()->role == 'LEGALMANAGER') {
            return redirect()->route('legal-manager-dashboard');
        } elseif (auth()->user()->role == 'CONTRACTBUSINESS') {
            return redirect()->route('cd-dashboard');
        } elseif (auth()->user()->role == 'USER') {
            return view('welcome', [
                'total_submission' => $total_submission
            ]);
        }
    }

    public function contactUs()
    {
        return view('contact_us');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function statistic()
    {
        $customer_submission = Customer::count();
        $vendor_submission = VendorSupplier::count();
        $lease_submission = Lease::count();
        $custdis_submission = CustomerDispute::count();
        $fraud_submission = Fraud::count();
        $outstanding_submission = Outstanding::count();
        $other_submission = Other::count();
        $permit_submission = Permit::count();

        return view('statistic', [
            'customer_submission' => $customer_submission,
            'vendor_submission' => $vendor_submission,
            'lease_submission' => $lease_submission,
            'custdis_submission' => $custdis_submission,
            'fraud_submission' => $fraud_submission,
            'outstanding_submission' => $outstanding_submission,
            'other_submission' => $other_submission,
            'permit_submission' => $permit_submission
        ]);
    }
}
