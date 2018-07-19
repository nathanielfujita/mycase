<?php

use Illuminate\Database\Seeder;

class ItemsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'image' => 'image/f_id_1.jpg',
            'sex' => 'F',
            'description'=>'テスト',
            'name' => 'tops',
            ];

        
        DB::table('items')->insert($param);
    }
}
