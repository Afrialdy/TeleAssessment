<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->nullable();
        $table->integer('age')->nullable();
        $table->enum('gender', ['Male', 'Female'])->nullable();
        $table->boolean('is_active')->default(true);
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone');
        $table->dropColumn('age');
        $table->dropColumn('gender');
        $table->dropColumn('is_active');
    });
}
}
