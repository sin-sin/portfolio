<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSifresTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sifre', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ime', 150);
            $table->char('sifra', 50);
            $table->char('username', 70);
            $table->char('email', 70);
            $table->text('podesavanja');
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
        Schema::dropIfExists('sifre');
    }
}
