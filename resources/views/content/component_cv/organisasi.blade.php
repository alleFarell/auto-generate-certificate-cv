<div class="card shadow mb-4">
    <a href="#organisasi" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="organisasi">
        <h6 class="m-0 font-weight-bold text-dark">Pengalaman Organisasi & Kepanitiaan</h6>
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
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Organisasi / Kepanitiaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/cv/org') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_org">Nama Organisasi / Kepanitiaan</label>
                                    <input type="text" class="form-control" id="nama_org" name="nama_org" required>
                                </div>
                                <div class="form-group">
                                    <label for="role_org">Role</label>
                                    <input type="text" class="form-control" id="role_org" name="role_org" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_org">Mulai</label>
                                    <input type="month" class="form-control" id="mulai_org" name="mulai_org" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_org">Selesai</label>
                                    <input type="month" class="form-control" id="selesai_org" name="selesai_org" required>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                        Desember, 2020 - Januari, 2021
                    </div>
                    <div class="col-sm-8 ml-0 pl-0">
                        <p class="font-weight-bold mb-0 pb-0">Nama Organisasi / Kepanitiaan</p>
                        <p class="font-italic mb-0 pb-0">Role</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
