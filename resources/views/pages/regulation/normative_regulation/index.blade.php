@extends('layouts.admin')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-4 mt-5 border-b border-gray-200 shadow">
                    <!-- <table> -->
                    <table id="crudTable" class="p-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="text-xs text-gray-500">
                                    Name
                                </th>
                                <th class="text-xs text-gray-500">
                                    Status
                                </th>
                                <th class="text-xs text-gray-500">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: "{{ route('regulation-normative') }}",
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    "className": "text-center",
                },
                {
                    data: 'name',
                    name: 'name',
                    "className": "text-center",
                },
                {
                    data: 'type',
                    name: 'type',
                    "className": "text-center",
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%',
                    "className": "text-center",
                },
            ]


        })
    </script>
@endsection
