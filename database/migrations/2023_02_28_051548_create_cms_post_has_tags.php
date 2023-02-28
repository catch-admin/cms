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
        Schema::create('cms_post_has_tags', function (Blueprint $table) {
            $table->integer('post_id')->comment('文章ID');
$table->integer('tag_id')->comment('标签ID');

$table->engine='InnoDB';
$table->comment('文章标签关联表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_post_has_tags');
    }
};
