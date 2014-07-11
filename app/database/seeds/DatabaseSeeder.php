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

		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
		
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->save();

    }

}

class PostsTableSeeder extends Seeder {

    public function run()
    {

        DB::table('posts');
        // $user = User::first();
        $i = 1;
        do {
	        $post = new Post();
	       	$post->user_id = 1; 
	        $post->title = 'Sample title: ' . $i;
	        $post->body = 'Here is antoher story about ships and whales';
	        $post->save();
	        $i++;
    	} while ($i < 10);
    }

}
