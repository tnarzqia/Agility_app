<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_customer', function (Blueprint $table) {
            $table->id('id_invoice_customer');
            $table->string('jenis_billing', 20);
            $table->string('invoice', 20);
            $table->string('customer', 50);
            $table->string('group_no', 20);
            $table->integer('sub_total');
            $table->integer('vat');
            $table->integer('total_due');
            $table->string('job');
            $table->string('faktur_pajak', 50);
            $table->string('bulan', 20);
            $table->date('send_email');
            $table->date('send_invoice');
            $table->string('no_drm', 20);
            $table->string('remarks', 100);
            $table->string('note', 100);
            $table->date('tgl_diterima');
            $table->date('nama_penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_customer');
    }
};
