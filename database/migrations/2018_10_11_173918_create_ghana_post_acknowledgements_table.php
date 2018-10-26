<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGhanaPostAcknowledgementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghana_post_acknowledgements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('searchInput')->nullable();
            $table->string('TransactionCode');
            $table->string('recieverFullName');
            $table->string('recieverBranch');
            $table->string('recieverDepartment');
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
        Schema::dropIfExists('ghana_post_acknowledgements');
    }
}
