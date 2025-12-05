<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("artistid");
            $table->integer("albumid");
            $table->foreign("artistid")->references("artist")->on("id");
            $table->foreign("albumid")->references("album")->on("id");
            $table->string("music");
            $table->string("file");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music');
    }
};
