<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("category_id");
            $table->string("title");
            $table->string("description");
            $table->string("url");
            $table->timestamps();
            $table->foreign("category_id")->references("id")->on("video_categories")
                    ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
