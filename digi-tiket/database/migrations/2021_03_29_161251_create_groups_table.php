<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->string("id_group");
            $table->string("stud_name");
            $table->date("YEAR");
            $table->string("nim_1");
            $table->string("name_1");
            $table->string("nim_2");
            $table->string("name_2");
            $table->string("nim_3");
            $table->string("name_3");
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
        Schema::dropIfExists('groups');
    }
}
