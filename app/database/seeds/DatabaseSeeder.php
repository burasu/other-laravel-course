<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call("UserTableSeeder");

        $this->command->info("Tabla users cargada");

		$this->call("PostTableSeeder");

        $this->command->info("Tabla posts cargada");
	}

}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert(array(
                "email"     =>      "prueba@gmail.com",
                "password"  =>      Hash::make("123456"),
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );
        DB::table("users")->insert(array(
                "email"     =>      "paco@gmail.com",
                "password"  =>      Hash::make("123456"),
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );
        DB::table("users")->insert(array(
                "email"     =>      "julian@gmail.com",
                "password"  =>      Hash::make("123456"),
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );
    }
}


class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("posts")->insert(array(
                "user_id"   => 1,
                "title"     => "título primer post de burasu",
                "content"   => "Contenido del primer post",
                "created_at"=> new DateTime,
                "updated_at"=> new DateTime
            )
        );

        DB::table("posts")->insert(array(
                "user_id"   => 1,
                "title"     => "título segundo post de burasu",
                "content"   => "Contenido del segundo post",
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );

        DB::table("posts")->insert(array(
                "user_id"   => 2,
                "title"     => "título tercer post de prueba",
                "content"   => "Contenido del primer post",
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );

        DB::table("posts")->insert(array(
                "user_id"   => 3,
                "title"     => "título cuarto post de 3",
                "content"   => "Contenido del primer post",
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );

        DB::table("posts")->insert(array(
                "user_id"   => 4,
                "title"     => "título quinto post de 4",
                "content"   => "Contenido del primer post",
                "created_at"=>      new DateTime,
                "updated_at"=>      new DateTime
            )
        );

    }
}