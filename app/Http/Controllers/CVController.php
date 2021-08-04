<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;
use App\Models\Biodata;
use App\Models\Education;
use App\Models\Seminar;
use App\Models\Project;
use App\Models\Organization;
use Illuminate\Support\Facades\Validator;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $data_biodata = Biodata::all();
        $data_education = Education::all()->sortBy('start_date');
        $data_seminar = Seminar::all()->sortBy('start_date');
        $data_project = Project::all()->sortBy('start_date');
        $data_organization = Organization::all()->sortBy('start_date');

        return view('content.cv', 
                compact('data_biodata', 
                        'data_education', 
                        'data_seminar', 
                        'data_project', 
                        'data_organization')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.cv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //store biodata to database
    public function store_biodata(Request $request, $id)
    {
        $model = Biodata::find($id);
        $model->fullname = $request->fullname;
        $model->email = $request->email;
        $model->country = $request->country;
        $model->city = $request->city;
        $model->birthday = $request->birthday;
        $model->phone = $request->phone;
        $model->linkedIn = $request->linkedIn;
        $model->update();
        
        return redirect('/cv');
    }
    
    //store education to database
    public function store_education(Request $request)
    {
        $rules = [
            'gpa'=> 'numeric|min:0|max:4'
        ];
 
        $messages = [
            'gpa.numeric'          => 'IPK diisi dengan angka desimal (gunakan titik pada bilangan desimal)',
            'gpa.min'          => 'IPK memiliki rentang minimal 0',
            'gpa.max'          => 'IPK memiliki rentang maksimal 4',
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
         
        if($validator->fails()){
            return redirect('/cv')->withErrors($validator)->withInput($request->all());
        } else {
            $model = new Education;
            $model->university = $request->university;
            $model->major = $request->major;
            $model->degree = $request->degree;
            $model->start_date = $request->start_date."-01";
            $model->end_date = $request->end_date."-01";
            $model->gpa = $request->gpa;
            $model->save();
            return redirect('/cv');
        }  
    }

    //store seminar to database
    public function store_seminar(Request $request)
    {
        $model = new Seminar;
        $model->event_name = $request->event_name;
        $model->organizer = $request->organizer;
        $model->start_date = $request->start_date;
        $model->end_date = $request->end_date;
        $model->save();

        return redirect('/cv');
    }

    //store project to database
    public function store_project(Request $request)
    {
        $model = new Project;
        $model->project_name = $request->project_name;
        $model->role = $request->role;
        $model->description = $request->description;
        $model->start_date = $request->start_date."-01";
        $model->end_date = $request->end_date."-01";
        $model->save();

        return redirect('/cv');
    }

    //store organization to database
    public function store_organization(Request $request)
    {
        $model = new Organization;
        $model->organization_name = $request->organization_name;
        $model->role = $request->role;
        $model->start_date = $request->start_date."-01";
        $model->end_date = $request->end_date."-01";
        $model->save();

        return redirect('/cv');
    }

    public function store_skill(Request $request, $id)
    {
        $model = Biodata::find($id);
        $current_skill = $model['skills'];
        if (empty($current_skill)){
            $new_skill = $request->skills;
            $model->skills = $new_skill;
        } else{
            $new_skill = $current_skill.'-'.$request->skills;
            $model->skills = $new_skill;
        }
        $model->update();

        return redirect('/cv');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_education(Request $request, $id)
    {
        $rules = [
            'gpa'=> 'numeric|min:0|max:4'
        ];
 
        $messages = [
            'gpa.numeric'          => 'IPK diisi dengan angka desimal (gunakan titik pada bilangan desimal)',
            'gpa.min'          => 'IPK memiliki rentang minimal 0',
            'gpa.max'          => 'IPK memiliki rentang maksimal 4',
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
         
        if($validator->fails()){
            return redirect('/cv')->withErrors($validator)->withInput($request->all());
        } else {
            $model = Education::find($id);
            $model->university = $request->university;
            $model->major = $request->major;
            $model->degree = $request->degree;
            $model->start_date = $request->start_date."-01";
            $model->end_date = $request->end_date."-01";
            $model->gpa = $request->gpa;
            $model->update();
            return redirect('/cv');
        } 
    }

    public function update_seminar(Request $request, $id)
    {
        $model = Seminar::find($id);
        $model->event_name = $request->event_name;
        $model->organizer = $request->organizer;
        $model->start_date = $request->start_date;
        $model->end_date = $request->end_date;
        $model->update();

        return redirect('/cv');
    }

    public function update_project(Request $request, $id)
    {
        $model = Project::find($id);
        $model->project_name = $request->project_name;
        $model->role = $request->role;
        $model->description = $request->description;
        $model->start_date = $request->start_date."-01";
        $model->end_date = $request->end_date."-01";
        $model->update();

        return redirect('/cv');
    }

    public function update_organization(Request $request, $id)
    {
        $model = Organization::find($id);
        $model->organization_name = $request->organization_name;
        $model->role = $request->role;
        $model->start_date = $request->start_date."-01";
        $model->end_date = $request->end_date."-01";
        $model->update();

        return redirect('/cv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_education($id)
    {
        $model = Education::find($id);
        $model->delete();
        return redirect('/cv');
    }

    public function destroy_seminar($id)
    {
        $model = Seminar::find($id);
        $model->delete();
        return redirect('/cv');
    }

    public function destroy_project($id)
    {
        $model = Project::find($id);
        $model->delete();
        return redirect('/cv');
    }

    public function destroy_organization($id)
    {
        $model = Organization::find($id);
        $model->delete();
        return redirect('/cv');
    }

    public function destroy_skill($id, $skill_name)
    {
        $model = Biodata::find($id);
        $skills = $model['skills'];
        $arr_skills = explode('-', $skills);
        $arr_skills = array_diff($arr_skills, array($skill_name));
        $new_skills = implode('-', $arr_skills);
        $model->skills = $new_skills;
        $model->update();
        return redirect('/cv');
    }

    public function pdf2()
    {
        $data_biodata = Biodata::all();
        $data_education = Education::all()->sortBy('start_date');
        $data_seminar = Seminar::all()->sortBy('start_date');
        $data_project = Project::all()->sortBy('start_date');
        $data_organization = Organization::all()->sortBy('start_date');

        //html2pdf
        $html2pdf = new Html2Pdf('P','A4','en',false,'UTF-8', array(0,5,0,5));
        $doc = view('content.component_cv.cv_pdf2', compact('data_biodata', 
                                                            'data_education', 
                                                            'data_seminar', 
                                                            'data_project', 
                                                            'data_organization')
                );
        $html2pdf->pdf->SetTitle('CV_'.$data_biodata[0]['fullname']);
        $html2pdf->setTestIsImage(false);
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output("CV_".$data_biodata[0]['fullname'].".pdf",'I');

        // return view('content.component_cv.cv_pdf2');
    }
}
