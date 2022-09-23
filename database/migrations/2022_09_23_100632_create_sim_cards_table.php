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
        Schema::create('sim_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string('iccid');
            $table->boolean('is_active');
            $table->string('imei');
            $table->string('notes');
            $table->timestamps();
            $table->softDeletes();

            $table->index('account_id', 'sim_cards_accounts_idx');
            $table->foreign('account_id')->on('accounts')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sim_cards');
    }
};
