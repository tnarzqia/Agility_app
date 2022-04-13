<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InvoiceVendor;
use Illuminate\Http\Request;

class InvoiceVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $invoiceVendor = InvoiceVendor::all();
        $data = ['invoice-vendor' => $invoiceVendor];
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $invoiceVendor = new InvoiceVendor();
        $invoiceVendor->suplier_id = $request->suplier_id;
        $invoiceVendor->vendor = $request->vendor;
        $invoiceVendor->tgl_invoice = $request->tgl_invoice;
        $invoiceVendor->received_inv_wh = $request->received_inv_wh;
        $invoiceVendor->create_date = $request->create_date;
        $invoiceVendor->invoice = $request->invoice;
        $invoiceVendor->project_id = $request->project_id;
        $invoiceVendor->total_before_ppn = $request->total_before_ppn;
        $invoiceVendor->ppn = $request->ppn;
        $invoiceVendor->total_after_ppn = $request->total_after_ppn;
        $invoiceVendor->pph_23 = $request->pph_23;
        $invoiceVendor->invoice_payment = $request->invoice_payment;
        $invoiceVendor->internal_reff = $request->internal_reff;
        $invoiceVendor->cms_code = $request->cms_code;
        $invoiceVendor->cms_payment = $request->cms_payment;
        $invoiceVendor->ho_to_halim = $request->ho_to_halim;
        $invoiceVendor->wh = $request->wh;
        $invoiceVendor->user = $request->user;
        $invoiceVendor->pay_date = $request->pay_date;
        $invoiceVendor->due_date = $request->due_date;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public  function store(Request $request)
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
}
