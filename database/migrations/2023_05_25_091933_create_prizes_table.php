<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->decimal('ticket_price', 10, 2)->nullable()->default(0.00);
            $table->integer('ticket_max')->nullable()->default(0);
            $table->integer('ticket_max_per_user')->nullable()->default(0);
            $table->integer('ticket_sold')->nullable()->default(0);
            $table->integer('ticket_remaining')->nullable()->default(0);
            $table->longText('description')->nullable();
            $table->string('question')->nullable();
            $table->json('options')->nullable(); // '["option1", "option2", "option3", "option4"]
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prizes');
    }
}
