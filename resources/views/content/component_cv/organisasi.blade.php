<div class="card shadow mb-4">
    <a href="#organisasi" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="organisasi">
        <h6 class="m-0 font-weight-bold text-dark">Pengalaman Organisasi</h6>
    </a>
    <div class="collapse show" id="organisasi">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_organisasi">
                + Tambah Organisasi
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal_organisasi" tabindex="-1" aria-labelledby="modal_organisasiLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Organisasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/cv/org') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="organization_name">Nama Organisasi</label>
                                    <input type="text" class="form-control" id="organization_name" name="organization_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" required>
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Mulai</label>
                                    <input type="month" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="end_date">Selesai</label>
                                    <input type="month" class="form-control" id="end_date" name="end_date" required>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="container">
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
                @endphp

                @foreach($data_organization as $key=>$value)
                    <div class="row mb-3">
                        <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                            @php
                               $start = explode("-", $value->start_date);
                               $end = explode("-", $value->end_date);
                               $start_date = $bulan[(int) $start[1]].', '.$start[0];
                               if ($value->end_date > now()){
                                   $end_date = "Present";
                               } else{
                                   $end_date = $bulan[(int) $end[1]].', '.$end[0];
                               }
                               echo $start_date.' - '.$end_date;
                            @endphp
                        </div>
                        <div class="col-sm-6 ml-0 pl-0">
                            <p class="font-weight-bold mb-0 pb-0">{{ucwords($value->organization_name)}}</p>
                            <p class="font-italic mb-0 pb-0">{{ucwords($value->role)}}</p>
                        </div>
                        <div class="col-sm-2 ml-0 pl-0">
                            <!-- Action Button for Edit & Delete -->
                            <a href="" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#organisasi_edit{{$value->id }}">Edit</a>
                            <a href="{{ url('/cv/org').'/'.$value->id.'/delete' }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Hapus</a>

                            <!-- Modal Edit-->
                            <div class="modal fade" id="organisasi_edit{{$value->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Pengalaman Organisasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="w-100 " method="POST" action="{{ url('/cv/org').'/'.$value->id.'/edit' }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="organization_name">Nama Organisasi</label>
                                                    <input type="text" class="form-control" id="organization_name" name="organization_name" value="{{$value->organization_name}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="role">Role</label>
                                                    <input type="text" class="form-control" id="role" name="role" value="{{$value->role}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="start_date">Mulai</label>
                                                    <input type="month" class="form-control" id="start_date" name="start_date" value="{{ substr($value->start_date,0,7) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="end_date">Selesai</label>
                                                    <input type="month" class="form-control" id="end_date" name="end_date" value="{{ substr($value->end_date,0,7) }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
