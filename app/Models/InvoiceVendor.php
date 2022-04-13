<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceVendor extends Model
{
    use HasFactory;
    public $table = 'invoice_vendor';
    public $primaryKey = 'id_invoice_vendor';
    protected $fillable = [
        'suplier_id',
        'vendor',
        'tgl_invoice',
        'received_inv_wh',
        'create_date',
        'invoice',
        'project_id',
        'total_before_ppn',
        'ppn',
        'total_after_ppn',
        'pph_23',
        'invoice_payment',
        'internal_reff',
        'cms_code',
        'cms_payment',
        'ho_to_halim',
        'wh',
        'user',
        'status',
        'pay_date',
        'due_date'
    ];
}
