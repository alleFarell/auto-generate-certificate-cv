@extends('layout.master')
@section('judul','CV | dashboard')
@section('content')

<!-- DataTales Example -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-dark ml-2" href="{{ url('/cv/download_cv2') }}" target="_blank" style="background-color: #060239 !important">Dark Blue</a>
        <a class="btn btn-light ml-2" href="{{ url('/cv/download_cv_rev') }}" target="_blank">White</a>
        <a class="btn btn-dark ml-2" href="{{ url('/cv/download_cv_dark') }}" target="_blank" style="background-color: #2D2D2D !important">Dark</a>
        <a class="btn btn-warning ml-2" href="{{ url('/cv/download_cv_grid') }}" target="_blank" style="">Grid</a>
    </div>
</div>

@include('content.component_cv.datadiri')
@include('content.component_cv.pendidikan')
@include('content.component_cv.seminar_training')
@include('content.component_cv.proyek')
@include('content.component_cv.organisasi')
@include('content.component_cv.skill')
@endsection

