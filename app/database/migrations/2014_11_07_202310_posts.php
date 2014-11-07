<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("posts", function($tabla)
        {
            $tabla->increments("id");
            $tabla->string("title", 100);
            $tabla->text("content");
            $tabla->integer("user_id")->unsigned();
            $tabla->timestamps();
            $tabla->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("posts");
	}

}
