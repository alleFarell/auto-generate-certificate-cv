<div class="card shadow mb-4">
    <a href="#pendidikan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="pendidikan">
        <h6 class="m-0 font-weight-bold text-dark">Pendidikan</h6>
    </a>
    <div class="collapse show" id="pendidikan">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Tambah Pendidikan
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/certificate') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="universitas">Universitas/Sekolah</label>
                                    <input type="text" class="form-control" id="nomor" name="universitas" required>
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
                                    <label for="deskripsi">Deskripsi (optional)</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Universitas/Sekolah</th>
                            <th class="text-center">Gelar</th>
                            <th class="text-center">Jurusan</th>
                            <th class="text-center">Mulai</th>
                            <th class="text-center">Selesai</th>
                            <th class="text-center">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Universitas Telkom</td>
                            <td>Sarjana</td>
                            <td>Informatika</td>
                            <td>Agustus, 2018</td>
                            <td>Juli, 2022</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
