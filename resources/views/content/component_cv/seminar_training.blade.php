<div class="card shadow mb-4">
    <a href="#seminar_training" class="d-block card-header py-3" data-toggle="collapse" role="button"
        aria-expanded="true" aria-controls="seminar_training">
        <h6 class="m-0 font-weight-bold text-dark">Seminar & Training</h6>
    </a>
    <div class="collapse show" id="seminar_training">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Tambah Seminar & Training
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Seminar & Training</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/cv/seminar_training') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_acara">Nama Acara</label>
                                    <input type="text" class="form-control" id="event_name" name="event_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="penyelenggara">Penyelenggara</label>
                                    <input type="text" class="form-control" id="organizer" name="organizer" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_acara">Mulai</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_acara">Selesai</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" required>
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
                
                @foreach($data_seminar as $key=>$value)
                    <div class="row mb-3">
                        <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                            @php
                               $start = explode("-", $value->start_date);
                               $end = explode("-", $value->end_date);
                               $start_date = $start[2].' '.$bulan[(int) $start[1]].' '.$start[0];
                               if ($value->end_date > now()){
                                   $end_date = "Present";
                               } else{
                                   $end_date = $end[2].' '.$bulan[(int) $end[1]].' '.$end[0];
                               }

                               #Code below is checking if the seminar event was held in one date only

                               if ($value->start_date != $value->end_date){
                                   echo $start_date.' - '.$end_date;
                               } else{
                                   echo $end_date;
                               }
                            @endphp
                        </div>
                        <div class="col-sm-6 ml-0 pl-0">
                            <p class="font-weight-bold mb-0 pb-0">{{ucwords($value->event_name)}}</p>
                            <p class="mb-0 pb-0">{{ucwords($value->organizer)}}</p>
                        </div>
                        <div class="col-sm-2 ml-0 pl-0">
                            <!-- Action Button for Edit & Delete -->
                            <a href="" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#seminar_edit{{$value->id }}" >Edit</a>
                            <a href="{{ url('/cv/seminar').'/'.$value->id.'/delete' }}" class="btn btn-danger btn-sm">Hapus</a>

                            <!-- Modal Edit-->
                            <div class="modal fade" id="seminar_edit{{$value->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Seminar & Training</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="w-100 " method="POST" action="{{ url('/cv/seminar').'/'.$value->id.'/edit' }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="nama_acara">Nama Acara</label>
                                                    <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $value->event_name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="penyelenggara">Penyelenggara</label>
                                                    <input type="text" class="form-control" id="organizer" name="organizer" value="{{ $value->organizer }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mulai_acara">Mulai</label>
                                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $value->start_date }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="selesai_acara">Selesai</label>
                                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $value->end_date }}" required>
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

<script>
    $(document).ready(function () {
        $('#dataTable_seminar').DataTable();
    });

</script>
