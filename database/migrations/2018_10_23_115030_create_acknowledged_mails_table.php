<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcknowledgedMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acknowledged_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TransactionCode');
            $table->string('Branch_From');
            $table->string('Branch_To');
            $table->string('package');
            $table->string('deliverymode');
            $table->string('deliveryperson');
            $table->string('IssuedBy');
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
        Schema::dropIfExists('acknowledged_mails');
    }
}
