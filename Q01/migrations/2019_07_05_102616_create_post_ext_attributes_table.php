<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostExtAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_ext_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id');
			$table->boolean('is_published')->default(true);
			$table->boolean('is_discussion')->default(true);
			$table->integer('views_count')->unsigned()->default(0);
			
			$table->foreign('post_id')->references('id')->on('posts');
			
			$table->index('post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_ext_attributes');
    }
}
