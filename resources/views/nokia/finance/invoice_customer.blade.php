@extends('admin')
@section('section')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#">chart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/rekap-invoice-customer">Invoice Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/rekap-invoice-vendor">Invoice Vendor</a>
        </li>
    </ul>
    <h3 class="my-3">Data Invoice Customer</h3>
    <hr class="mb-3 my-2">
    <a href="/rekap-invoice-customer" class="btn btn-primary btn-sm">Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="api/invoiceCustomer/create" method="GET">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="jenis_biling">Jenis Billing</label>
                            <input type="text" id="jenis_biling" class="form-control" name="jenis_biling" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="invoice">Invoice</label>
                            <input type="text" id="invoice" class="form-control" name="invoice">
                        </div>
                        <div class="form-group">
                            <label for="customer">Customer</label>
                            <input type="text" id="customer" class="form-control" name="customer">
                        </div>
                        <div class="form-group">
                            <label for="groupno">Group No</label>
                            <input type="text" id="groupno" class="form-control" name="group_no">
                        </div>
                        <div class="form-group">
                            <label for="subtotal">Sub Total</label>
                            <input type="text" id="subtotal" class="form-control" name="sub_total">
                        </div>
                        <div class="form-group">
                            <label for="vat">VAT</label>
                            <input type="text" id="vat" class="form-control" name="vat">
                        </div>
                        <div class="form-group">
                            <label for="total_due">Total Due</label>
                            <input type="text" id="total_due" class="form-control" name="total_due">
                        </div>
                        <div class="form-group">
                            <label for="job">JOB</label>
                            <input type="text" id="job" class="form-control" name="job">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fatkur_pajak">Fatkur Pajak</label>
                            <input type="text" id="fatkur_pajak" class="form-control" name="fatkur_pajak">
                        </div>
                        <div class="form-group">
                            <label for="bulan">Bulan</label>
                            <input type="text" id="bulan" class="form-control" name="bulan">
                        </div>
                        <div class="form-group">
                            <label for="tgl_send_email">Tanggal Send Email</label>
                            <input type="date" id="tgl_send_email" class="form-control" name="tgl_send_email">
                        </div>
                        <div class="form-group">
                            <label for="send_invoice">Send Invoice</label>
                            <input type="date" id="send_invoice" class="form-control" name="send_invoice">
                        </div>
                        <div class="form-group">
                            <label for="no_drn">No DRN</label>
                            <input type="text" id="no_drn" class="form-control" name="no_drn">
                        </div>
                        <div class="form-group">
                            <label for="remarks">Remarks</label>
                            <input type="text" id="remarks" class="form-control" name="remarks">
                        </div>
                        <div class="form-group">
                            <label for="note">Note</label>
                            <input type="text" id="note" class="form-control" name="note">
                        </div>
                        <div class="form-group">
                            <label for="tgl_diterima">Tanggal Diterima</label>
                            <input type="text" id="tgl_diterima" class="form-control" name="tgl_diterima">
                        </div>
                        <div class="form-group">
                            <label for="diterima_oleh">Diterima Oleh</label>
                            <input type="text" id="diterima_oleh" class="form-control" name="diterima_oleh">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="restart" class="btn btn-warning btn-block">Restart</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
