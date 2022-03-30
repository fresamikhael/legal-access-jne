@extends('layouts.main')

@section('content')
    <div class="flex gap-4 py-4 px-4">
        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Customer</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $customer_submission }} Pengajuan</p>
        </a>

        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Vendor &
                Supplier</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $vendor_submission }} Pengajuan</p>
        </a>

        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Lease</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $lease_submission }} Pengajuan</p>
        </a>

        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Customer
                Dispute</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $custdis_submission }} Pengajuan</p>
        </a>
    </div>

    <div class="flex gap-4 py-4 px-4">
        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Fraud</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $fraud_submission }} Pengajuan</p>
        </a>

        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Outstanding
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $outstanding_submission }} Pengajuan</p>
        </a>

        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Other</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $other_submission }} Pengajuan</p>
        </a>

        <a href="#"
            class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Pengajuan Permit</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $permit_submission }} Pengajuan</p>
        </a>
    </div>
@endsection
