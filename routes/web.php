<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Drafting\ContractBusinessController;
use App\Http\Controllers\Drafting\CustomerController;
use App\Http\Controllers\Drafting\DraftingController;
use App\Http\Controllers\Drafting\LeaseController;
use App\Http\Controllers\Drafting\LegalLease;
use App\Http\Controllers\Drafting\VendorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Litigation\CustomerDisputeController;
use App\Http\Controllers\Litigation\FraudController;
use App\Http\Controllers\Litigation\LitigationController;
use App\Http\Controllers\Litigation\OtherController;
use App\Http\Controllers\Litigation\OutstandingController;
use App\Http\Controllers\Litigation\TeamCsController;
use App\Http\Controllers\Permit\LegalPermitController;
use App\Http\Controllers\Permit\PerizinanBaruController;
use App\Http\Controllers\Permit\PermitController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login-attempt');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return redirect('/');
    });
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/database', [DatabaseController::class, 'index'])->name('database');

    Route::get('/database-customer', [DatabaseController::class, 'index'])->name('database-customer');
    Route::get('/database-vendor', [DatabaseController::class, 'dataVendor'])->name('database-vendor');
    Route::get('/database-lease', [DatabaseController::class, 'dataLease'])->name('database-lease');
    Route::get('/database-customer-dispute', [DatabaseController::class, 'dataCustomerDispute'])->name('database-customer-dispute');
    Route::get('/database-fraud', [DatabaseController::class, 'dataFraud'])->name('database-fraud');
    Route::get('/database-outstanding', [DatabaseController::class, 'dataOutstanding'])->name('database-outstanding');
    Route::get('/database-other', [DatabaseController::class, 'dataOther'])->name('database-other');
    Route::get('/database-perizinan', [DatabaseController::class, 'dataPerizinan'])->name('database-perizinan');

    Route::get('/downloadPermit/{public}', [DownloadController::class, 'downloadPermit'])->name('download');
    Route::get('/downloadLitigation/{download}', [DownloadController::class, 'downloadLitigation'])->name('download-litigation');
    Route::get('/downloadDrafting/{download}', [DownloadController::class, 'downloadDrafting'])->name('download-Drafting');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');

    Route::get('/update/{id}', [ContractBusinessController::class, 'update'])->name('cd-update');
    Route::post('/update/{id}', [ContractBusinessController::class, 'updatePost'])->name('cd-update-post');

    Route::prefix('/drafting')->group(function () {
        Route::get('/', [DraftingController::class, 'index'])->name('drafting-index');

        Route::get('/customer', [CustomerController::class, 'index'])->name('customer-index');
        Route::post('/customer/post', [CustomerController::class, 'store'])->name('customer-post');
        Route::get('/customer/check', [CustomerController::class, 'check'])->name('customer-check');

        Route::get('/vendor-supplier', [VendorController::class, 'index'])->name('vendor-index');
        Route::post('/vendor-supplier/post', [VendorController::class, 'store'])->name('vendor-post');

        Route::get('/vendor-supplier/check', [VendorController::class, 'check'])->name('vendor-check');

        Route::get('/lease', [LeaseController::class, 'index'])->name('lease-index');
        Route::post('/lease/post', [LeaseController::class, 'store'])->name('lease-post');
        Route::get('/lease/check', [LeaseController::class, 'check'])->name('lease-check');
    });

    Route::prefix('/litigation')->group(function () {
        Route::get('/', [LitigationController::class, 'index'])->name('litigation-index');

        Route::get('/customer-dispute', [CustomerDisputeController::class, 'index'])->name('customer-dispute-index');
        Route::get('/customer-dispute/check', [CustomerDisputeController::class, 'check'])->name('customer-dispute-check');
        Route::get('/customer-dispute/report', [CustomerDisputeController::class, 'report'])->name('customer-dispute-report');
        Route::post('/customer-dispute/post', [CustomerDisputeController::class, 'store'])->name('customer-dispute-post');

        Route::get('/fraud', [FraudController::class, 'index'])->name('fraud-index');
        Route::post('/fraud/post', [FraudController::class, 'store'])->name('fraud-post');
        Route::get('/fraud/check', [FraudController::class, 'check'])->name('fraud-check');
        Route::get('/fraud/report', [FraudController::class, 'report'])->name('fraud-report');

        Route::get('/outstanding', [OutstandingController::class, 'index'])->name('outstanding-index');
        Route::get('/outstanding/check', [OutstandingController::class, 'check'])->name('outstanding-check');
        Route::get('/outstanding/report', [OutstandingController::class, 'report'])->name('outstanding-report');
        Route::post('/outstanding/post', [OutstandingController::class, 'store'])->name('outstanding-post');

        Route::get('/other', [OtherController::class, 'index'])->name('other-index');
        Route::get('/other/check', [OtherController::class, 'check'])->name('other-check');
        Route::get('/other/report', [OtherController::class, 'report'])->name('other-report');
        Route::post('/other/post', [OtherController::class, 'store'])->name('other-post');
    });

    Route::prefix('/permit')->group(function () {
        Route::get('/', [PermitController::class, 'index'])->name('permit-index');

        Route::get('/perizinan-baru/check/{id}', [PerizinanBaruController::class, 'check'])->name('perizinan-baru-check');

        Route::get('/perizinan-baru', [PerizinanBaruController::class, 'index'])->name('perizinan-baru-index');
        Route::post('/perizinan-baru/post', [PerizinanBaruController::class, 'store'])->name('perizinan-baru-post');
    });

    Route::prefix('/legal-permit')->group(function () {
        Route::get('/', [LegalPermitController::class, 'index'])->name('legal-permit-dashboard');

        Route::get('/perizinan-baru/approval/{id}', [PerizinanBaruController::class, 'approval'])->name('perizinan-baru-approval');
        Route::post('/perizinan-baru/approval/{id}', [LegalPermitController::class, 'store'])->name('perizinan-baru-approval-post');

        Route::post('/perizinan-baru/check/{id}', [LegalPermitController::class, 'checkPost'])->name('perizinan-baru-check-post');

        Route::get('/perizinan-baru/update/{id}', [LegalPermitController::class, 'update'])->name('perizinan-baru-update');
        Route::post('/perizinan-baru/update/{id}', [LegalPermitController::class, 'updatePost'])->name('perizinan-baru-update-post');

        Route::get('/perizinan-baru/finish/{id}', [LegalPermitController::class, 'finish'])->name('perizinan-baru-finish');
        Route::post('/perizinan-baru/finish/{id}', [LegalPermitController::class, 'finishPost'])->name('perizinan-baru-finish-post');
    });

    Route::prefix('/admin-legal')->middleware('IsAdmin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
    });

    Route::prefix('/legal-litigation-1')->middleware('IsLegalLiti1')->group(function () {
        Route::get('/', [LitigationController::class, 'dashboardLiti1'])->name('legal1-dashboard');

        Route::get('/check/{id}', [LitigationController::class, 'check'])->name('legal1-check');
        Route::post('/check/{id}', [LitigationController::class, 'checkPost'])->name('legal1-check-post');
    });

    Route::prefix('/legal-litigation-2')->middleware('IsLegalLiti2')->group(function () {
        Route::get('/', [LitigationController::class, 'dashboardLiti2'])->name('legal2-dashboard');

        Route::get('/check/{id}', [LitigationController::class, 'checkLiti2'])->name('legal2-check');
        Route::post('/check/{id}', [LitigationController::class, 'checkLiti2Post'])->name('legal2-check-post');
    });

    Route::prefix('/legal-manager')->group(function () {
        Route::get('/', [LitigationController::class, 'dashboardManager'])->name('legal-manager-dashboard');

        Route::get('/check/{id}', [LitigationController::class, 'checkManager'])->name('legal-manager-check');
        Route::post('/check/{id}', [LitigationController::class, 'checkManagerPost'])->name('legal-manager-check-post');
    });

    Route::prefix('/team-cs')->middleware('IsTeamCs')->group(function () {
        Route::get('/', [TeamCsController::class, 'index'])->name('team-cs-dashboard');
        Route::get('/table_fraud', [TeamCsController::class, 'table_fraud'])->name('team-cs-table-fraud');
        Route::get('/table_outstanding', [TeamCsController::class, 'table_outstanding'])->name('team-cs-table-outstanding');
        Route::get('/table_other', [TeamCsController::class, 'table_other'])->name('team-cs-table-other');

        Route::get('/update_customer_dispute/{id}', [TeamCsController::class, 'updateCustomer'])->name('cs-update-customer-dispute');
        Route::post('/update_customer_dispute/{id}', [TeamCsController::class, 'updateCustomerPost'])->name('cs-update-customer-dispute-post');

        Route::get('/update_fraud/{id}', [TeamCsController::class, 'updateFraud'])->name('cs-update-fraud');
        Route::post('/update_fraud/{id}', [TeamCsController::class, 'updateFraudPost'])->name('cs-update-fraud-post');

        Route::get('/update_outstanding/{id}', [TeamCsController::class, 'updateOutstanding'])->name('cs-update-outstanding');
        Route::post('/update_outstanding/{id}', [TeamCsController::class, 'updateOutstandingPost'])->name('cs-update-outstanding-post');

        Route::get('/update_other/{id}', [TeamCsController::class, 'updateOther'])->name('cs-update-other');
        Route::post('/update_other/{id}', [TeamCsController::class, 'updateOtherPost'])->name('cs-update-other-post');

        Route::get('/finish/{id}', [TeamCsController::class, 'finish'])->name('cs-finish');
        Route::post('/finish/{id}', [TeamCsController::class, 'finishPost'])->name('cs-finish-post');

        Route::get('/close/{id}', [TeamCsController::class, 'close'])->name('cs-close');
        Route::post('/close/{id}', [TeamCsController::class, 'closePost'])->name('cs-close-post');
    });

    Route::prefix('/contract-business')->middleware('IsCd')->group(function () {
        Route::get('/', [ContractBusinessController::class, 'index'])->name('cd-dashboard');

        Route::get('/table-vendor', [ContractBusinessController::class, 'table_vendor'])->name('table-vendor');

        Route::get('/check/{id}', [ContractBusinessController::class, 'check'])->name('cd-check');
        Route::post('/check/{id}', [ContractBusinessController::class, 'checkPost'])->name('cd-check-post');

        Route::get('/checkVendor/{id}', [ContractBusinessController::class, 'checkVendor'])->name('cd-check-vendor');
        Route::post('/checkVendor/{id}', [ContractBusinessController::class, 'checkVendorPost'])->name('cd-check-vendor-post');

        Route::get('/finish/{id}', [ContractBusinessController::class, 'finish'])->name('cd-finish');
        Route::post('/finish/{id}', [ContractBusinessController::class, 'finishPost'])->name('cd-finish-post');
    });

    Route::prefix('/legal-lease')->group(function () {
        Route::get('/', [LegalLease::class, 'index'])->name('legal-lease-dashboard');

        Route::get('/check/{id}', [LegalLease::class, 'check'])->name('legal-lease-check');
        Route::post('/check/{id}', [LegalLease::class, 'checkPost'])->name('legal-lease-check-post');

        Route::get('/finish/{id}', [LegalLease::class, 'finish'])->name('legal-lease-finish');
        Route::post('/finish/{id}', [LegalLease::class, 'finishPost'])->name('legal-lease-finish-post');
    });
});
