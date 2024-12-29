<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('product');
            $table->string('typename');
            $table->float('inches');
            $table->string('screenresolutions');
            $table->string('cpu_company');
            $table->string('cpu_type');
            $table->float('cpu_frequency');
            $table->integer('ram'); // dalam GB
            $table->string('memory'); // Misalnya: SSD, HDD
            $table->string('gpu_company');
            $table->string('gpu_type');
            $table->string('os'); // Sistem Operasi
            $table->float('weight'); // dalam kg
            $table->decimal('price', 10, 2); // dalam Euro
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
