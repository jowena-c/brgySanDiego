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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("middlename");
            $table->string("lastname");
            $table->string("suffix");
            $table->string("alias");
            $table->string("age"); 
            $table->date("birthdate"); 
            $table->string("birthplace");
            $table->string("civilstatus");
            $table->string("gender");
            $table->string("occupation");
            $table->string("lot");
            $table->string("barangay");
            $table->string("municipality");
            $table->string("province");
            $table->string("zipcode");
            // $table->("idgov");
            // $table->??("idpic");
            $table->string("ecname");
            $table->string("ecnumber");
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
        Schema::dropIfExists('form');
    }
};
