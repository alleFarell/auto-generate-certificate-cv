@extends('layout.master')
@section('judul','e-certificate | dashboard')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Your Activity</h6>
    </div>
    <div class="card-body">
        <a class="btn btn-success mb-3" href="{{ url('/certificate/add-cert') }}">Input Data</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">Nama Event</th>
                        <th class="text-center">Pembicara</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Alternative Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$value)
                    
                    @php
                        $bulan = array(
                                1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );

                        $hari = array(
                                0 =>   'Minggu',
                                'Senin',
                                'Selasa',
                                'Rabu',
                                'Kamis',
                                'Jumat',
                                'Sabtu'
                            );
                        $hari_mulai = date('w', strtotime($value->tanggal_mulai));
                        $hari_selesai = date('w', strtotime($value->tanggal_selesai));
                        $komponen_mulai = explode("-",$value->tanggal_mulai);
                        $komponen_selesai = explode("-",$value->tanggal_selesai);
                        $mulai = $hari[(int) $hari_mulai].', '.$komponen_mulai[2].' '.$bulan[(int) $komponen_mulai[1]].' '.$komponen_mulai[0];
                        $selesai = $hari[(int) $hari_selesai].', '.$komponen_selesai[2].' '.$bulan[(int) $komponen_selesai[1]].' '.$komponen_selesai[0];

                        
                        // var_dump($hari_mulai);die;

                    @endphp
                        <tr>
                            <td>{{ucwords($value->event)}}</td>
                            <td>{{ucwords($value->pembicara)}}</td>
                            @if($value->tanggal_mulai != $value->tanggal_selesai)
                                <td>{{ $mulai }} - {{ $selesai }}</td>
                            @else
                                <td>{{ $mulai }}</td>
                            @endif
                            
                            @if (($value->status == "Hadir") && ($value->tanggal_selesai < now()))
                                <td class="text-center"><a class="badge badge-success p-1">
                                    <i class="fas fa-check"></i><span> Selesai</span>
                                    </a></td>
                                <td class="text-center"><a class="text-danger" href="{{ url('/certificate/pdf').'/'.$value->id }}" target="_blank">
                                    <i class="far fa-file-pdf fa-lg "></i>
                                </a></td>
                                <!-- Alternative Design Certificate -->
                                <td class="text-center"><a class="text-danger" href="{{ url('/certificate/pdf2').'/'.$value->id }}" target="_blank">
                                    <i class="far fa-file-pdf fa-lg "></i>
                                </a></td>
                                <!-- End of Alternative Design Certificate -->
                            @elseif (($value->status == "Tidak Hadir") && ($value->tanggal_selesai < now()))
                                <td class="text-center"><a class="badge badge-danger p-1">
                                    <i class="fas fa-times"></i><span> Batal</span>
                                </a></td>
                                <td class="text-center"><a class="text-dark" >
                                    <i class="far fa-file-pdf fa-lg "></i>
                                </a></td>
                                 <!-- Alternative Design Certificate -->
                                <td class="text-center"><a class="text-dark" >
                                    <i class="far fa-file-pdf fa-lg "></i>
                                </a></td>
                                <!-- End of Alternative Design Certificate -->
                            @else 
                                <td class="text-center"><a class="badge badge-warning  p-1">
                                    <i class="fa fa-history"></i><span> Proses</span>
                                </a></td>
                                <td class="text-center"><a class="text-dark" >
                                    <i class="far fa-file-pdf fa-lg "></i>
                                </a></td>
                                <!-- Alternative Design Certificate -->
                                <td class="text-center"><a class="text-dark" >
                                    <i class="far fa-file-pdf fa-lg "></i>
                                </a></td>
                                 <!-- End of Alternative Design Certificate -->
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

