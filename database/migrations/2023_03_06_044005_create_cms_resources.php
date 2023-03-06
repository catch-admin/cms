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
        Schema::create('cms_resources', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('资源名称');
            $table->string('content')->default('')->comment('资源内容');
            $table->string('url')->default('')->comment('资源链接');
            $table->string('description')->default('')->comment('资源描述');
            $table->tinyInteger('type')->default(1)->comment('1 banner 2 友情链接');
            $table->tinyInteger('is_visible')->default(1)->comment('1 可见 2 不可见');
            $table->tinyInteger('is_target')->default(1)->comment('1 本窗口 2 新窗口');
            $table->creatorId();
            $table->createdAt();
            $table->updatedAt();
            $table->deletedAt();

            $table->engine='InnoDB';
            $table->comment('资源标');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_resources');
    }
};
