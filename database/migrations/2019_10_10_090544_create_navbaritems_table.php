<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbaritemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbaritems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('homePage');
            $table->string('servicesPage');
            $table->string('blogPage');
            $table->string('contactPage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navbaritems');
    }
}
