<div class="card shadow mb-4">
    <a href="#skill" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="skill">
        <h6 class="m-0 font-weight-bold text-dark">Skill</h6>
    </a>
    <div class="collapse show" id="skill">
        @if (count($data_biodata) > 0)
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modal_skill">
                    + Tambah Skill
                </button>
                <br>
                @php
                    // Get skills in string from database, then split into array of string for each word

                    $str_skills = $data_biodata[0]->skills;
                    if (empty($str_skills)){
                        $arr_skills = array("EMPTY");
                    } else{
                        $arr_skills = explode('-', $str_skills);
                    }
                @endphp
                @for ($i=0; $i < count($arr_skills); $i++)
                <span class="btn btn-secondary mb-2">{{ ucwords($arr_skills[$i]) }}<a href="{{ url('/cv/skills').'/'.$data_biodata[0]->id.'/'.$arr_skills[$i].'/delete' }}" class="badge badge-pill badge-dark ml-2 ">
                    <span aria-hidden="true"> &times;</span>
                </a></span>
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
                            @foreach($data_biodata as $key=>$value)
                            <div class="modal-body">
                                <form class="w-100 " method="POST" action="{{ url('/cv/skill').'/'.$value->id }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="skills">Skill</label>
                                        <input type="text" class="form-control" id="skills" name="skills" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
