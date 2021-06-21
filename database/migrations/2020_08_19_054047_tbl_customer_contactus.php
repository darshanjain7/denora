<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCustomerContactus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_customer_contactus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',100);
            $table->string('mobile',100);
            $table->string('subject',300);
            $table->string('site_name',300);
            $table->string('part_no',300);
            $table->string('doc_upload',300);
            $table->string('note',600);
            $table->Date('created_date');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_customer_contactus');
    }
}
