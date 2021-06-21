<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCustomerSkNumberRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_customer_sk_number_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',100);
            $table->string('mobile',100);
            $table->string('sk_number',300);
            $table->string('subject',300);
            $table->string('site_name',300);
            $table->string('doc_upload',300);
            $table->string('note',600);
            $table->datetime('created_date');
            $table->string('created_ip',100);
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tbl_customer_sk_number_request');
    }
}
