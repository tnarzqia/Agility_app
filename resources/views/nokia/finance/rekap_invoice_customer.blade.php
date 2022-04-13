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
    <a href="/input-invoice-customer" class="btn btn-primary btn-sm">Tambah</a>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <button class="btn btn-info btn-sm"> <i class="fa-solid fa-file-circle-info"></i>
                                    Detail</button>
                                <button class="btn btn-warning btn-sm">Update</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lion</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <button class="btn btn-info btn-sm"> <i class="fa-solid fa-file-circle-info"></i>
                                    Detail</button>
                                <button class="btn btn-warning btn-sm">Update</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
