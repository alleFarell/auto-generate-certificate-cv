@extends('layout.master')
@section('judul','Design Certificate | dashboard')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Your Activity</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Nama Template</th>
                        <th class="text-center">Nama File</th>
                        <th class="text-center">Ukuran File</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_template as $value)
                    <tr>
                        <td><center>{{ucwords($value->template_name)}}</center></td>
                        <td><center>{{ucwords($value->filename)}}</center></td>
                        <td><center>{{ucwords($value->filesize)}}</center></td>
                        
                        <td class="text-center">
                            <a href="{{ url('/certificate/template-certificate').'/'.$value->id.'/delete' }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

