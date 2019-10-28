<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('amount')->unsigned();
            $table->string('address');
            $table->text('detail');
            $table->enum('status', ['รอการยืนยัน', 'ยืนยันเสร็จสิ้น โปรดทำการชำระเงิน', 'ปฏิเสธคำสั่งซื้อ', 'ยกเลิกคำสั่งซื้อ', 'ยืนยันการชำระเงิน'])->default('รอการยืนยัน');
            $table->string('reply')->default('กรุณารอการตอบกลับ');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
