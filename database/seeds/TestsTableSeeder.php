<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tests')->insert([
        [
          'test_string' => 'first_value',
        ],
        [
          'test_string' => 'second_value',
        ],
        [
          'test_string' => 'third_value',
        ]
      ]);
    }
}
