<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMahasiswa extends Migration
{    
	 /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
		{
			Schema::create('mahasiswa',function (Blueprint $table){
				$table->increments('id');
				$table->string('nim');
				$table->string('nmmhs');
				$table->string('alamat');
				$table->string('tgllahir');
				$table->string('jenkel');
				$table->string('notelp');
				$table->string('jurusan');
				$table->string('agama');
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
        Schema::dropIfExists('mahasiswa');
    }
}