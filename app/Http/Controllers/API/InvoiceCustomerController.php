<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InvoiceCustomer;
use Illuminate\Http\Request;

class InvoiceCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $invoiceCustomer = InvoiceCustomer::all();
        $data = ['invoice_customer' => $invoiceCustomer];
        return $data;
        // return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $invoiceCustomer = new InvoiceCustomer();
        $invoiceCustomer->jenis_billing = $request->jenis_billing;
        $invoiceCustomer->invoice = $request->invoice;
        $invoiceCustomer->customer = $request->customer;
        $invoiceCustomer->group_no = $request->group_no;
        $invoiceCustomer->sub_total = $request->sub_total;
        $invoiceCustomer->vat = $request->vat;
        $invoiceCustomer->total_due = $request->total_due;
        $invoiceCustomer->job = $request->job;
        $invoiceCustomer->faktur_pajak = $request->faktur_pajak;
        $invoiceCustomer->bulan = $request->bulan;
        $invoiceCustomer->send_email = $request->send_email;
        $invoiceCustomer->send_invoice = $request->send_invoice;
        $invoiceCustomer->no_drm = $request->no_drm;
        $invoiceCustomer->remarks = $request->remarks;
        $invoiceCustomer->note = $request->note;
        $invoiceCustomer->tgl_diterima = $request->tgl_diterima;
        $invoiceCustomer->nama_penerima = $request->nama_penerima;

        $invoiceCustomer->save();
        // return view('/input-invoice-customer');
        return 'Data Berhasil';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // mengembalikan data sesuai response
        // $validasi = $request->validate([
        //     'jenis_billing' => 'required',
        //     'invoice' => 'required',
        //     'customer' => 'required',
        //     'group_no' => 'required',
        //     'sub_total' => 'required',
        //     'vat' => 'required',
        //     'total_due' => 'required',
        //     'job' => 'required',
        //     'faktur_pajak' => 'required',
        //     'bulan' => 'required',
        //     'send_email' => 'required',
        //     'send_invoice' => 'required',
        //     'remarks' => 'required',
        //     'note' => 'required',
        //     'tgl_diterima' => 'required',
        //     'nama_penerima' => 'required',
        // ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
