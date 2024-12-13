<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('genre');
            $table->integer('year');
            $table->string('director');
            $table->float('rating');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('genre');
        });
    }
};
