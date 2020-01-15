<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablesAddSoftdeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table){
           $table->softDeletes();
        });

        Schema::table('cars', function (Blueprint $table){
            $table->softDeletes();
        });

        Schema::table('drivers', function (Blueprint $table){
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function (Blueprint $table){
            $table->dropSoftDeletes();
        });

        Schema::table('cars', function (Blueprint $table){
            $table->dropSoftDeletes();
        });

        Schema::table('drivers', function (Blueprint $table){
            $table->dropSoftDeletes();
        });
    }
}
