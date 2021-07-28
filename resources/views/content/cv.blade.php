@extends('layout.master')
@section('judul','CV | dashboard')
@section('content')

<!-- DataTales Example -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-success" href="{{ url('/cv/download_cv')}}" target="_blank">Download CV (html2pdf)</a>
        <a class="btn btn-success ml-2" href="{{ url('/cv/download_cv2') }}" target="_blank">Download CV (html2pdf) versi 2</a>
        <a class="btn btn-success ml-2" href="{{ url('/cv/download_cv1') }}" target="_blank">Download CV (ctrl+p)</a>
    </div>
</div>

@include('content.component_cv.datadiri')
@include('content.component_cv.pendidikan')
@include('content.component_cv.seminar_training')
@include('content.component_cv.proyek')
@include('content.component_cv.organisasi')
@include('content.component_cv.skill')
@endsection

