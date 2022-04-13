@extends('admin')
@section('section')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#">chart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/rekap-invoice-customer">Invoice Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/rekap-invoice-vendor">Invoice Vendor</a>
        </li>
    </ul>
    <h3 class="my-3">Data Invoice Vendor</h3>
    <hr class="mb-3 my-2">
    <a href="/rekap-invoice-customer" class="btn btn-primary btn-sm">Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="suppliyer_id">Supplier ID</label>
                            <input type="text" id="suppliyer_id" class="form-control" name="supplier_id" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="vendor">Vendor</label>
                            <input type="text" id="vendor" class="form-control" name="vendor">
                        </div>
                        <div class="form-group">
                            <label for="tgl_invoice">Tanggal Invoice</label>
                            <input type="text" id="tgl_invoice" class="form-control" name="tgl_invoice">
                        </div>
                        <div class="form-group">
                            <label for="received_inv_wh">RECEIVED INV WH</label>
                            <input type="text" id="received_inv_wh" class="form-control" name="received_inv_wh">
                        </div>
                        <div class="form-group">
                            <label for="create_date">Create Date</label>
                            <input type="text" id="create_date" class="form-control" name="create_date">
                        </div>
                        <div class="form-group">
                            <label for="invoice">Invoice</label>
                            <input type="text" id="invoice" class="form-control" name="invoice">
                        </div>
                        <div class="form-group">
                            <label for="project_id">Project.ID</label>
                            <input type="text" id="project_id" class="form-control" name="project_id">
                        </div>
                        <div class="form-group">
                            <label for="total_before_ppn">Total Before PPN</label>
                            <input type="text" id="total_before_ppn" class="form-control" name="total_before_ppn">
                        </div>
                        <div class="form-group">
                            <label for="ppn">PPN</label>
                            <input type="text" id="total_before_ppn" class="form-control" name="ppn">
                        </div>
                        <div class="form-group">
                            <label for="total_after_ppn">Total After PPN</label>
                            <input type="text" id="total_after_ppn" class="form-control" name="total_after_ppn">
                        </div>
                        <div class="form-group">
                            <label for="pph_23">PPH 23 2%</label>
                            <input type="text" id="pph_23" class="form-control" name="pph_23">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="invoice_payment">Invoice Payment</label>
                            <input type="text" id="invoice_payment" class="form-control" name="invoice_payment">
                        </div>
                        <div class="form-group">
                            <label for="internal_reff">Internal Reff</label>
                            <input type="text" id="internal_reff" class="form-control" name="internal_reff">
                        </div>
                        <div class="form-group">
                            <label for="cms_code">CMS Code</label>
                            <input type="text" id="cms_code" class="form-control" name="cms_code">
                        </div>
                        <div class="form-group">
                            <label for="cms_payment">CMS Payment</label>
                            <input type="text" id="cms_payment" class="form-control" name="cms_payment">
                        </div>
                        <div class="form-group">
                            <label for="ho_to_halim">HO to HALIM</label>
                            <input type="date" id="ho_to_halim" class="form-control" name="ho_to_halim">
                        </div>
                        <div class="form-group">
                            <label for="wh">WH</label>
                            <input type="date" id="wh" class="form-control" name="wh">
                        </div>
                        <div class="form-group">
                            <label for="user">User</label>
                            <input type="date" id="user" class="form-control" name="user">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" id="status" class="form-control" name="status">
                        </div>
                        <div class="form-group">
                            <label for="pay_date">Pay Date</label>
                            <input type="date" id="pay_date" class="form-control" name="pay_date">
                        </div>
                        <div class="form-group">
                            <label for="due_date">Due Date</label>
                            <input type="date" id="due_date" class="form-control" name="due_date">
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
