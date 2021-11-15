<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hrj_ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('imgs');
            $table->string('price')->nullable();
            $table->enum('status',['active','inactive']);
            $table->string('phone');
            $table->integer('city_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
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
        Schema::dropIfExists('hrj_ads');
    }
}
