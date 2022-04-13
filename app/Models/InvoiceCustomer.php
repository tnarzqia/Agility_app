<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceCustomer extends Model
{
    use HasFactory;
    public $table = 'invoice_customer';
    public $primaryKey = 'id_invoice_customer';
    protected $fillable = [
        'jenis_billing',
        'invoice',
        'customer',
        'group_no',
        'sub_total',
        'vat',
        'total_due',
        'job',
        'faktur_pajak',
        'bulan',
        'send_email',
        'send_invoice',
        'no_drm',
        'remarks',
        'note',
        'tgl_diterima',
        'nama_penerima'
    ];

    static function getInvoiceCustomer()
    {
    }
}
