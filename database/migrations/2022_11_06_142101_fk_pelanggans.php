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
        Schema::table('pelanggans', function (Blueprint $table) {
            //
            $table->string('no_user', 6);
            $table->foreign('no_user', 'fk_users_no_user')->references('no')->on('users')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            //
            $table->dropForeign('fk_users_no_user');
            $table->dropColumn('no_user');
        });
    }
};
