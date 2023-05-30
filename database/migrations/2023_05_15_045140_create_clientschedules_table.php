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
        Schema::create('clientschedules', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('url');
            $table->string('ensure');
            $table->string('date');
            $table->string('timein');
            $table->string('venue');
            $table->string('clientcategory');

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
        Schema::dropIfExists('clientschedules');
    }
};
