<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizers')->insert([
            'name' => "Organizer",
            'email' => "organizer@yahoo.com",
            'password' => Hash::make('password'),
        ]);

        DB::table('posts')->insert([
            'eventname' => "PHP LARAVEL",
            'date' => "April 11, 2000",
            'time' => "11:00 pm",
            'bring' => "Laptop",
            'wear' => "Casual",
        ]);


        $feedback=[

               ['id' => "1",  'feedback' => "Good Event"],
                ['id ' => "1",  'feedback' => "Bad Event"],
    
            ];
            DB::table('feedbacks')->insert($feedback);
    
    }
    
}
