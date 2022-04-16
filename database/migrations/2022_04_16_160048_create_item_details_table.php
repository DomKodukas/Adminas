<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateItemDetailsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('item_details', function (Blueprint $table) {
$table->increments('id');
$table->integer('item_id')->unsigned();
$table->foreign('item_id')->references('id')->on('items');
$table->string('filename');
$table->timestamps();
});
}
public function down()
{
Schema::drop('item_details');
}
}
?>