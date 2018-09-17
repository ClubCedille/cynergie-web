<?php

use Illuminate\Database\Seeder;

class CounterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Counter::class, 10)->create();

        DB::table('controller_models')->insert([
            'modelid' => 1,
            'name' => 'logic',
            'serialnumber' => '23413423423',
            'company' => 'schneider electric',
        ]);

        DB::table('counters')->insert([
            'name' => "DEMO",
            'address' => '0.0.0.0',
            'port' => 502,
            'slaveId' => 1,
            'modelid' => 1,
        ]);
    }
}
