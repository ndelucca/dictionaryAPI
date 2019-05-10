<?php

use Illuminate\Database\Seeder;

class EnglishDictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DictionaryWord::class,30)->create();
    }
}
