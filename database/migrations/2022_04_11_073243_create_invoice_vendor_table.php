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
        Schema::create('invoice_vendor', function (Blueprint $table) {
            $table->id('id_invoice_vendor');
            $table->string('suplier_id', 15);
            $table->string('vendor', 50);
            $table->date('tgl_invoice');
            $table->date('received_inv_wh');
            $table->date('create_date');
            $table->string('invoice', 50);
            $table->string('project_id', 20);
            $table->integer('total_before_ppn');
            $table->integer('ppn');
            $table->integer('total_after_ppn');
            $table->integer('pph_23');
            $table->integer('invoice_payment');
            $table->string('internal_reff');
            $table->string('cms_code', 20);
            $table->integer('cms_payment');
            $table->date('ho_to_halim');
            $table->string('wh', 20);
            $table->string('user', 20);
            $table->string('status', 10);
            $table->date('pay_date');
            $table->date('due_date');
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
        Schema::dropIfExists('invoice_vendor');
    }
};
