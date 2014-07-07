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

		// $this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
		
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();

        $user2 = new User();
        $user2->email = 'admin02@codeup.com';
        $user2->password = Hash::make('adminPass123!');
        $user2->save();
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
	       	$post->user_id = rand(1,2);
	        $post->title = 'Sample title: ' . $i;
	        $post->body = 'Here is antoher story about ships and whales';
	        $post->save();
	        $i++;
    	} while ($i < 10);
    }

}
