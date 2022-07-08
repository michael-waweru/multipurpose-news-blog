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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->integer('category_id');
            $table->string('category_name')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('author_name')->nullable();           
            $table->enum('published_by',['this_account','guest_author']);
            $table->integer('read_time');
            $table->enum('status',['published','draft'])->default('draft');
            $table->enum('is_live',['isLive','notLive'])->default('notLive');
            $table->string('image')->nullable();
            $table->longText('short_description');
            $table->longText('description');
            $table->string('files')->nullable();
            $table->text('tags')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('blogs');
    }
};
