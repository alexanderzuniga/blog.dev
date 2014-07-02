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

	}

}

// class UserTableSeeder extends Seeder {

//     public function run()
//     {
//         DB::table('users')->delete();

//         $user = new User();
//         $user->email = 'admin@codeup.com';
//         $user->password = Hash::make('adminPass123!');
//         $user->save();
//     }

// }

class PostsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();
        $i = 1;
        do {
	        $post = new Post();
	        $post->title = 'Sample title: ' . $i;
	        $post->body = 'Here is antoher story about ships and whales';
	        $post->save();
	        $i++;
    	} while ($i < 15);
    }

}
