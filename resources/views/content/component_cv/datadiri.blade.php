<div class="card shadow mb-4">
    <a href="#datadiri" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="datadiri">
        <h6 class="m-0 font-weight-bold text-dark">Data Diri</h6>
    </a>
    <div class="collapse show" id="datadiri">
        <div class="card-body">
            <form class="w-100" method="POST" action="{{ url('/cv/datadiri').'/'.$data_biodata[0]->id }}">
                @csrf
                @foreach($data_biodata as $key=>$value)
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ucwords($value->fullname)}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="{{$value->email}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Domisili</label>
                        <div class="col-sm-5">
                            <label for="country" class="col-form-label">Negara</label>
                            <input type="text" class="form-control" id="country" name="country" value="{{ucwords($value->country)}}">
                        </div>
                        <div class="col-sm-5">
                            <label for="city" class="col-form-label">Kota</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ucwords($value->city)}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="birthday" name="birthday"
                                value="{{$value->birthday}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">No. HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$value->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="linkedIn" class="col-sm-2 col-form-label">LinkedIn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="linkedIn" name="linkedIn"
                                value="{{$value->linkedIn}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
