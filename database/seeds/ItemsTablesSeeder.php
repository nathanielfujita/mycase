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
            'image' => 'images/id_1.jpg',
            'sex' => 'M',
            'description'=>'テスト',
            'name' => 'tops',
            'category' => 'topst',
        
            
            ];
        DB::table('items')->insert($param);
    }
}
