@extends('layout.master')
@section('judul','add data | dashboard')
@section('content')
<!-- Begin Page Content -->
<div class="container w-75">
    <div class="text-center h1">
        Input Data Certificate
    </div>
    <div class="mt-5">
        <form class="w-100 " method="POST" action="{{ url('/certificate') }}">
            @csrf
            <div class="form-group">
                <label for="nomor">No Certificate</label>
                <input type="text" class="form-control" id="nomor" name="nomor" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe Event</label>
                <select class="form-control" id="tipe" name="tipe" required>
                    <option value="seminar">Seminar</option>
                    <option value="webinar">Webinar</option>
                    <option value="talkshow">Talkshow</option>
                    <option value="workshop">Workshop</option>
                    {{-- <option>Competition</option> --}}
                    {{-- <option>Bootcamp</option> --}}
                </select>
            </div>
            <div class="form-group">
                <label for="event">Nama Event</label>
                <input type="text" class="form-control" id="event" name="event" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3" >Submit</button>
        </form>
    </div>
</div>
@endsection
