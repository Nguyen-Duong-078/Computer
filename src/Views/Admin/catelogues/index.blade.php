@extends('layouts.master')

@section('title')
    Catelogues
@endsection
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4>
            <span class="text-muted fw-light">Catelogues /</span> Catelogue
            List
        </h4>
        <div class="card-header d-flex justify-content-end align-items-center mb-3">
            <a class="btn btn-primary" href="catelogues/create"><i class="mdi mdi-plus me-0 me-sm-1"></i>Add Catelogue</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="example"
                    class=" text-center table table-bordered dt-responsive nowrap table-striped align-middle"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($catelogues as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>
                                    <img src="{{ $item['image'] }}" alt="" width="60px" height="60px"
                                        class="rounded-3">
                                </td>
                                <td>
                                    {!! $item['is_active'] ? '<span class="badge bg-success">YES</span>' : '<span class="badge bg-danger">NO</span>' !!}
                                </td>
                                <td>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Show"
                                        class="btn btn-info btn-sm" href="catelogues/{{ $item['id'] }}/show"><i
                                            class="mdi mdi-eye"></i></a>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Update"
                                        class="btn btn-warning btn-sm" href="catelogues/{{ $item['id'] }}/update"><i
                                            class="mdi mdi-pencil"></i></a>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"
                                        class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to')"
                                        href="catelogues/{{ $item['id'] }}/delete"><i
                                            class="mdi mdi-delete-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
@section('style-libs')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection
@section('script-libs')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script>
        new DataTable("#example", {
            order: [
                [0, 'desc']
            ]
        });
    </script>
@endsection
