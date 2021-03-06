<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDHLAcknowledgementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_h_l_acknowledgements', function (Blueprint $table) {
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
        Schema::dropIfExists('d_h_l_acknowledgements');
    }
}
