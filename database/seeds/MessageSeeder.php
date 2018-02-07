<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Message::class, 6)->create();
        factory(App\User::class, 20)->create()->each(function(App\User $user) {
            factory(Message::class)
                ->times(3)
                ->create([
                    'user_id' => $user->id
                ]);
        });
    }
}
