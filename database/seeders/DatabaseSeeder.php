<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(TypeMovie::class);
        $this->call(Language::class);
        $this->call(Branch::class);
        $this->call(Room::class);
        $this->call(TypeSeat::class);
        $this->call(Seat::class);
        $this->call(Format::class);
        $this->call(Banner::class);
        $this->call(TypeShowTime::class);
        $this->call(Movie::class);
        $this->call(ShowTime::class);
        $this->call(Food::class);
        $this->call(TypeAcc::class);
    }
}