<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;

class CVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.cv');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Store a newly created pendidikan in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pendidikan(Request $request)
    {
        return $request;
    }

    public function pdf()
    {
        $html2pdf = new Html2Pdf('P','A4','en',false,'UTF-8', array(0,10,0,10));
        $doc = view('content.component_cv.cv_pdf');
        $html2pdf->pdf->SetTitle('CV_Ghina');
        $html2pdf->setTestIsImage(false);
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output("CV_Ghina.pdf",'I');

        // return view('content.component_cv.cv_pdf');
    }

    public function pdf1()
    {
        // $html2pdf = new Html2Pdf('P','A4','en',false,'UTF-8', array(0,10,0,10));
        // $doc = view('content.component_cv.cv_pdf1');
        // $html2pdf->pdf->SetTitle('CV_Ghina');
        // $html2pdf->setTestIsImage(false);
        // $html2pdf->writeHTML($doc, false);
        // $html2pdf->Output("CV_Ghina.pdf",'I');

        return view('content.component_cv.cv_pdf1');
    }

    public function pdf2()
    {
        $html2pdf = new Html2Pdf('P','A4','en',false,'UTF-8', array(0,5,0,5));
        $doc = view('content.component_cv.cv_pdf2');
        $html2pdf->pdf->SetTitle('CV_Ghina');
        $html2pdf->setTestIsImage(false);
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output("CV_Ghina.pdf",'I');

        // return view('content.component_cv.cv_pdf2');
    }
}
