<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CloseOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('closed_orders')->insert([
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.88
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3148.24,
                'entry-price-MT4'=> 2560,
                'exit-price-signal'=> 3141.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.88998
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 31122.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.12
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.88
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.4
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.7
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.7
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.3445
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.32323
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.1212
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.3445
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.32323
            ],
            [
                'action'=>'Buy',
                'symbol'=>'GBPCAD',
                'lots'=>'0.1',
                'entry-price-signal'=> 3142.24,
                'entry-price-MT4'=> 3151,
                'exit-price-signal'=> 3142.74,
                'exit-price-MT4'=> 3142.24,
                'rest'=> -0.1212
            ]
        ]);
    }
}
