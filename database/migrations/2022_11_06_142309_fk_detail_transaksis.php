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
        Schema::table('detail_transaksis', function (Blueprint $table) {
            //
            $table->string('no_transaksi', 6);
            $table->foreign('no_transaksi', 'fk_transaksis_no_transaksi')->references('no')->on('transaksis')->onUpdate('CASCADE');
            $table->string('no_barang', 6);
            $table->foreign('no_barang', 'fk_barangs_no_barang')->references('no')->on('barangs')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_transaksis', function (Blueprint $table) {
            //
            $table->dropForeign('fk_transaksis_no_transaksi');
            $table->dropColumn('no_transaksi');
            $table->dropForeign('fk_barangs_no_barang');
            $table->dropColumn('no_barang');
        });
    }
};
