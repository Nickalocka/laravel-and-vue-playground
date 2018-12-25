<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->string('second_name');
            $table->string('phone');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('city');
            $table->string('postcode');
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
            $table->dropColumn(['second_name','phone','address_1','address_2','address_3','city','postcode']);
            $table->renameColumn('first_name', 'name');
        });
    }
}
