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
        Schema::create('selections', function (Blueprint $table) {
            $table->id();
            $table->boolean('essentials')->default(1);
            $table->boolean('marketing')->default(1);
            $table->boolean('preferences')->default(1);
            $table->boolean('analysis')->default(1);
            $table->unsignedBigInteger('accesses_id')->nullable();
            $table->foreign('accesses_id')->references('id')->on('accesses')
            ->onUpdate('cascade')
            ->onDelete('set null');
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
        Schema::dropIfExists('selections');
    }
};
