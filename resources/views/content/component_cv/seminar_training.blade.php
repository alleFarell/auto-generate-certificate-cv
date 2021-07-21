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
                                    <input type="text" class="form-control" id="nama_acara" name="nama_acara" required>
                                </div>
                                <div class="form-group">
                                    <label for="penyelenggara">Penyelenggara</label>
                                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_acara">Mulai</label>
                                    <input type="date" class="form-control" id="mulai_acara" name="mulai_acara" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_acara">Selesai</label>
                                    <input type="date" class="form-control" id="selesai_acara" name="selesai_acara" required>
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
                        27 Desember 2020
                    </div>
                    <div class="col-sm-8 ml-0 pl-0">
                        <p class="font-weight-bold mb-0 pb-0">Changing The Way You Think To Fulfil Your Potential</p>
                        <p class="mb-0 pb-0">Telkom University</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 font-weight-bold mr-0 pr-0">
                        27 Maret 2020 - 29 April 2020
                    </div>
                    <div class="col-sm-8 ml-0 pl-0">
                        <p class="font-weight-bold mb-0 pb-0">Nama Seminar / Training</p>
                        <p class="mb-0 pb-0">Penyelenggaranya</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dataTable_seminar').DataTable();
    });

</script>
