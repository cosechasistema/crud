<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {      Schema::create('orders', function (Blueprint $table) {
    //    Field Name	Data Type
    // id	int(PK)
    // created_at	timestamp
    // customers_id	int(11)
    // order_number	varchar(25)
    $table->bigIncrements('id');
    $table->timestamps();
    $table->softDeletes(); //Nueva línea, para el borrado lógico
    $table->integer('customers_id')->nullable();
    $table->string('order_number', 25)->nullable();
    $table->double('total');

    $table->engine = 'InnoDB';	// Specify the table storage engine (MySQL).
    // $table->charset = 'utf8';	// Specify a default character set for the table (MySQL).
    //$table->collation = 'utf8_unicode_ci'; //

  });
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
  Schema::dropIfExists('ordes');
}
}
