<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("cover");
            $table->string("author");
            $table->string("category");
            $table->enum("status",["APROVADO", "RECEBIDO"])->default("RECEBIDO");
            $table->longText("body");
            $table->timestamp("published_at")->nullable();
            $table->string("document")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('publications');
    }
}
