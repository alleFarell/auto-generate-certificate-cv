<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
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
        $data = Certificate::all();
        return view('content.certificate', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create_certificate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Certificate;
        $model->nomor = $request->nomor;
        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->tipe = $request->tipe;
        $model->event = $request->event;
        $model->tanggal_mulai = $request->tanggal_mulai;
        $model->tanggal_selesai = $request->tanggal_selesai;
        $model->status = "-";
        $model->save();

        return redirect('/certificate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pdf($id)
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
        $doc = view('content.certificate_pdf', compact('data', 'tgl_indo'));
        $html2pdf->pdf->SetTitle('Certificate_'.$data[0]['nama']);
        $html2pdf->setTestIsImage(false);
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output($data[0]['nama'].".pdf",'I');
        // end of hrml2pdf

        // return view('content.certificate_pdf', compact('data','tgl_indo'));
    }

    
    

}
