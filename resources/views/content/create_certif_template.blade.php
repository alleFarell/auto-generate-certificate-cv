@extends('layout.master')
@section('judul','add template | dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container w-75">
    <div class="text-center h1">
        Upload Certificate Template
    </div>
    <div class="mt-5">
        <form class="w-100 " method="POST" action="{{ url('/certificate/upload-template') }}" enctype="multipart/form-data">
            @csrf
           <div class="form-group">
               <label for="file" class="form-label">File Template</label>
               <input type="file" class="form-control form-control-sm" id="template-img" name="template-img" style="padding: 1px;">
           </div>

            <button type="submit" class="btn btn-primary mb-3" >Upload</button>
        </form>
    </div>
</div>
@endsection
