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
        factory(Message::class)
            ->times(100)
            ->create();
    }
}
