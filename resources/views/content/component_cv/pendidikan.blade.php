<div class="card shadow mb-4">
    <a href="#pendidikan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="pendidikan">
        <h6 class="m-0 font-weight-bold text-dark">Pendidikan</h6>
    </a>
    <div class="collapse show" id="pendidikan">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pendidikan_modal">
                + Tambah Pendidikan
            </button>

            <!-- Modal -->
            <div class="modal fade" id="pendidikan_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pendidikan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/cv/pendidikan') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="universitas">Universitas/Institut/Sekolah</label>
                                    <input type="text" class="form-control" id="university" name="university" required>
                                </div>
                                <div class="form-group">
                                    <label for="gelar">Gelar</label>
                                    <input type="text" class="form-control" id="degree" name="degree" required>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" id="major" name="major" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai">Mulai</label>
                                    <input type="month" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai">Selesai</label>
                                    <input type="month" class="form-control" id="end_date" name="end_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="ipk">IPK</label>
                                    <input type="text" class="form-control" id="gpa" name="gpa" required>
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

                @foreach($data_education as $key=>$value)
                    <div class="row">
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
                        <div class="col-sm-8 ml-0 pl-0">
                            <p class="font-weight-bold mb-0 pb-0">{{ucwords($value->university)}} - {{ucwords($value->degree)}}</p>
                            <p class="mb-0 pb-0">{{ucwords($value->major)}}</p>
                            <p>{{$value->gpa}}/4.00</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
