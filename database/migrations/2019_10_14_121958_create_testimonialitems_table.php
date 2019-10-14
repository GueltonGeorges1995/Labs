<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonialitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('text');
            $table->string('titre');
            $table->string('sousTitre');
            $table->string('imgPath');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonialitems');
    }
}
