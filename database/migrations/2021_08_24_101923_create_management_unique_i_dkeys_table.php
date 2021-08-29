<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementUniqueIDkeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_unique_i_dkeys', function (Blueprint $table) {
            $table->id();
            $table->integer('id_no');
            $table->string('refference_key');
            $table->string('unique_id_key');
            $table->tinyInteger('status')->default('1')->comment('0==pending, 1==approved');
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
        Schema::dropIfExists('management_unique_i_dkeys');
    }
}
