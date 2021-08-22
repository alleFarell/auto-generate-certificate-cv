<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\DesignCertificate;
use Spipu\Html2Pdf\Html2Pdf;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_certificate = Certificate::all();
        $data_template = DesignCertificate::all();
        return view('content.certificate', compact('data_certificate', 'data_template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_template = DesignCertificate::all();
        return view('content.create_certificate', compact('data_template'));
    }

    public function create_template()
    {
        $data_template = DesignCertificate::all();
        if (count($data_template) != 0) {
            $last_id = DesignCertificate::all()->last()->id;
        } else{
            $last_id = 0;
        }
        return view('content.create_certif_template', compact('data_template', 'last_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count_all = Certificate::count() + 1;
        // $count_type = Certificate::where('tipe','=',$request->tipe)->count();
        $parse_date = date_parse($request->tanggal_selesai);
        $month_code = $parse_date['month'];
        $year_code = $parse_date['year'];
        $model = new Certificate;
        $model->nomor = sprintf('%05d', $count_all).'/'.$request->tipe.'/'.sprintf('%02d', $month_code).'/'.$year_code;
        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->tipe = $request->tipe;
        $model->event = $request->event;
        $model->pembicara = $request->pembicara;
        $model->tanggal_mulai = $request->tanggal_mulai;
        $model->tanggal_selesai = $request->tanggal_selesai;
        $model->status = "-";
        $model->design_certificate_id = $request->template_sertifikat;
        $model->save();

        return redirect('/certificate');
    }

    // Store design certificate template to database
    public function store_template(Request $request)
    {
        $request->validate([
            'template-img' => 'required|mimes:jpg,jpeg,png'
        ]);

        $template_name = $request->template_name;
        $filename = $request->file("template-img")->getClientOriginalName();
        $filesize = $request->file("template-img")->getSize();

        $request->file('template-img')->storeAs('public/templates', $filename); 

        $model = new DesignCertificate;
        $model->template_name = $template_name;
        $model->filename = $filename;
        $model->filesize = $filesize;
        $model->save();

        return redirect('/certificate');
    }

    public function view_template()
    {
        $data_template = DesignCertificate::all();
        return view('content.view_template_certificate', compact('data_template'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_template($id)
    {
        $model = DesignCertificate::find($id);
        $model->delete();
        return redirect('/certificate/view-template');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id, $id_template_sertifikat)
    {
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

        $data = Certificate::where('id',$id)->get();
        $tgl = ($data[0]['tanggal_selesai']);
        $komponen = explode("-",$tgl);
        $tgl_indo = $komponen[2].' '.$bulan[(int) $komponen[1]].' '.$komponen[0];
        

        // html2pdf
        $html2pdf = new Html2Pdf('L','A4','en',false,'UTF-8', array(0,0,0,0));
        $doc = view('content.certificate_pdf_'.$id_template_sertifikat, compact('data', 'tgl_indo'));
        $html2pdf->pdf->SetTitle('Certificate_'.$data[0]['nama']);
        $html2pdf->setTestIsImage(false);
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output($data[0]['nama'].".pdf",'I');
        // end of hrml2pdf

    }
}
