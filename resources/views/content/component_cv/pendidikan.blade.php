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
                                    <input type="text" class="form-control" id="universitas" name="universitas" required>
                                </div>
                                <div class="form-group">
                                    <label for="gelar">Gelar</label>
                                    <input type="text" class="form-control" id="gelar" name="gelar" required>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai">Mulai</label>
                                    <input type="month" class="form-control" id="mulai" name="mulai" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai">Selesai</label>
                                    <input type="month" class="form-control" id="selesai" name="selesai" required>
                                </div>
                                <div class="form-group">
                                    <label for="ipk">IPK</label>
                                    <input type="text" class="form-control" id="ipk" name="ipk" required>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                        Agustus, 2018 - Juli, 2022
                    </div>
                    <div class="col-sm-8 ml-0 pl-0">
                        <p class="font-weight-bold mb-0 pb-0">Telkom University - Sarjana / Bachelor</p>
                        <p class="mb-0 pb-0">Informatika</p>
                        <p>3.00/4.00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                        Oktober, 2022 - Agustus, 2024
                    </div>
                    <div class="col-sm-8 ml-0 pl-0">
                        <p class="font-weight-bold mb-0 pb-0">Institut Teknologi Bandung - Master / Magister</p>
                        <p class="mb-0 pb-0">Nama Jurusan</p>
                        <p>3.00/4.00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                        September, 2024 - November, 2027
                    </div>
                    <div class="col-sm-8 ml-0 pl-0">
                        <p class="font-weight-bold mb-0 pb-0">Institut Teknologi Bandung - Doktor / Doctor</p>
                        <p class="mb-0 pb-0">Nama Jurusan</p>
                        <p>3.00/4.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
