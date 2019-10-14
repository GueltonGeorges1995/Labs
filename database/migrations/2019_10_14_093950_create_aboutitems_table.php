<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titre');
            $table->text('textGauche');
            $table->text('textDroite');
            $table->string('imgPath');
            $table->string('videoPath');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutitems');
    }
}
