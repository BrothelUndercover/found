<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('check_time')->default('')->comment('监控时间');
            $table->integer('company_id')->comment('公司/平台');
            $table->boolean('is_business')->default('1')->nullable()->comment('工商备案');
            $table->boolean('is_site')->default('1')->nullable()->comment('网站备案');
            $table->boolean('status')->default('1')->nullable()->comment('状态');
            $table->string('mark')->default('')->comment('备注');
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
        Schema::dropIfExists('monitors');
    }
}
