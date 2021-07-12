@extends('layout.master')
@section('judul','e-certificate | dashboard')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Your Activity</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Tipe Event</th>
                        <th class="text-center">Nama Event</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="text-center">Tipe Event</th>
                        <th class="text-center">Nama Event</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Seminar</td>
                        <td>Changing The Way You Think to Fulfil Your Potential</td>
                        <td>27 Juli 2020</td>
                        <td class="text-center"><a class="badge badge-success badge-sm p-1">
                            <i class="fas fa-check"></i>
                        </a></td>
                        <td class="text-center"><a class="text-danger" href="">
                            <i class="far fa-file-pdf fa-lg"></i>
                        </a></td>
                    </tr>             
                    <tr>
                        <td>Workshop</td>
                        <td>Judul Workshopnya</td>
                        <td>12 Desember 2020</td>
                        <td class="text-center"><a class="badge badge-success badge-sm p-1">
                            <i class="fas fa-check"></i>
                        </a></td>
                        <td class="text-center"><a class="text-danger" href="">
                            <i class="far fa-file-pdf fa-lg"></i>
                        </a></td>
                    </tr>             
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
@endpush
