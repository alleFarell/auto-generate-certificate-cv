@extends('layout.master')
@section('judul','CV | dashboard')
@section('content')
<!-- DataTales Example -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-success" href="{{ url('/download_cv') }}">Download CV</a>
    </div>
</div>
@include('content.component_cv.datadiri')
@include('content.component_cv.pendidikan')
@include('content.component_cv.kerja')
@include('content.component_cv.proyek')
@include('content.component_cv.organisasi')
@include('content.component_cv.publikasi')
@endsection

