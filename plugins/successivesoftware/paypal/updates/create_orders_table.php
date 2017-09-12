<?php namespace SuccessiveSoftware\Paypal\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('successivesoftware_paypal_orders', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('transaction_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->decimal('total');
            $table->string('payment_status');
            $table->dateTime('order_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('successivesoftware_paypal_orders');
    }
}
