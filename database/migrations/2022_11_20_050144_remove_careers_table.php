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
        // drop the career_posts table
        Schema::dropIfExists('career_posts');
        // create the career_posts table
        Schema::create('career_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->json('description');
            $table->enum('brand', ['hot-wings', 'wingers', 'sports', 'main']);
            $table->json('requirements');
            $table->string('location');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
