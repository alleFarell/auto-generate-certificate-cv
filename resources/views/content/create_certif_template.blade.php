@extends('layout.master')
@section('judul','add template | dashboard')
@section('content')
<!-- Begin Page Content -->
@php
    # Checking number of row in design_certificate table
    # Untuk menentukan nama template yang akan di upload
    if (count($data_template) < 1) {
        $num = 1;
    } else {
        $num = $last_id + 1;
    }
@endphp

<div class="container w-75">
    <div class="text-center h1">
        Upload Certificate Template
    </div>
    <div class="mt-5">
        <form class="w-100 " method="POST" action="{{ url('/certificate/upload-template') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="template_name">Nama Template</label>
                <input type="text" class="form-control" id="template_name" name="template_name" value="{{'Template '.$num}}" required readonly>
            </div>
           <div class="form-group">
               <label for="file" class="form-label">File Template</label>
               <input type="file" class="form-control form-control-sm @error('template-img') is-invalid @enderror" id="template-img" name="template-img" style="padding: 1px;">
               
               @error('template-img')
                    <span class="invalid-feedback">{{$message}}</span>
               @enderror
           </div>

            <button type="submit" class="btn btn-primary mb-3" >Upload</button>
        </form>
    </div>
</div>
@endsection
