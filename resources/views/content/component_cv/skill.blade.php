<div class="card shadow mb-4">
    <a href="#skill" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="skill">
        <h6 class="m-0 font-weight-bold text-dark">Skill</h6>
    </a>
    <div class="collapse show" id="skill">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modal_skill">
                + Tambah Skill
            </button>
            <br>
            @php
                $arr = ["Javascript", "HTML", "CSS", "PHP", "Python3", "Pandas", "Numpy", "Excel", "Golang" ,"Codeigniter", "Laravel", "Django", "C++", "Java", "Oracle SQL Developer", "MySql"];
            @endphp
            @for ($i=0; $i < count($arr); $i++)
            <a class="btn btn-outline-primary mb-2">{{$arr[$i]}}</a>
            @endfor
            <!-- Modal -->
            <div class="modal fade" id="modal_skill" tabindex="-1" aria-labelledby="modalskillLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalskillLabel">Tambah Skill</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="w-100 " method="POST" action="{{ url('/cv/skill') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="keterampilan">Skill</label>
                                    <input type="text" class="form-control" id="keterampilan" name="keterampilan" required>
                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
