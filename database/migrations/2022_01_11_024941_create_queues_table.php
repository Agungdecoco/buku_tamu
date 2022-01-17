<?php

use App\Models\Consultant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queues', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->dateTime('tgl_konsultasi');
            $table->char('consultants_nip');
            $table->foreign('consultants_nip')->references('nip')->on('consultants');
            $table->text('topik');
            $table->string('tipe_konsultasi');
            $table->string('ruang');
            $table->string('anggota1');
            $table->string('anggota2');
            $table->string('anggota3');
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
        Schema::dropIfExists('queues');
    }
}
