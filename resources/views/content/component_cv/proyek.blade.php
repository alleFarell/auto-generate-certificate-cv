<div class="card shadow mb-4">
    <a href="#proyek" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="proyek">
        <h6 class="m-0 font-weight-bold text-dark">Daftar Proyek</h6>
    </a>
    <div class="collapse show" id="proyek">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_proyek">
                + Tambah Proyek
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modal_proyek" tabindex="-1" aria-labelledby="modal_proyekLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal_proyekLabel">Tambah Proyek</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/cv/proyek') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_proyek">Nama Proyek</label>
                                    <input type="text" class="form-control" id="project_name" name="project_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_proyek">Mulai</label>
                                    <input type="month" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_proyek">Selesai</label>
                                    <input type="month" class="form-control" id="end_date" name="end_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows=5 required></textarea>
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

                @foreach($data_project as $key=>$value)
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
                            <p class="font-weight-bold mb-0 pb-0">{{ucwords($value->project_name)}}</p>
                            <p class="font-italic mb-0 pb-0">{{ucwords($value->role)}}</p>
                            <p class="mb-0 pb-0" style="text-align: justify;">{{ucfirst($value->description)}}</p>
                        </div>
                        <div class="col-sm-2 ml-0 pl-0">
                            <!-- Action Button for Edit & Delete -->
                            <a href="" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#proyek_edit{{$value->id }}">Edit</a>
                            <a href="{{ url('/cv/proyek').'/'.$value->id.'/delete' }}" class="btn btn-danger btn-sm">Hapus</a>

                            <!-- Modal Edit-->
                            <div class="modal fade" id="proyek_edit{{$value->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Proyek</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="w-100 " method="POST" action="{{ url('/cv/proyek').'/'.$value->id.'/edit' }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="nama_proyek">Nama Proyek</label>
                                                    <input type="text" class="form-control" id="project_name" name="project_name" value="{{$value->project_name}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="role">Role</label>
                                                    <input type="text" class="form-control" id="role" name="role" value="{{$value->role}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mulai_proyek">Mulai</label>
                                                    <input type="month" class="form-control" id="start_date" name="start_date" value="{{ substr($value->start_date,0,7) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="selesai_proyek">Selesai</label>
                                                    <input type="month" class="form-control" id="end_date" name="end_date" value="{{ substr($value->end_date,0,7) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea class="form-control" id="description" name="description" rows=5 required>{{$value->description}}</textarea>
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
