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
            'image' => 'image/id_1.jpg',
            'sex' => 'M',
            'description'=>'テスト',
            'name' => 'tops',
        
        
            
            ];
        DB::table('items')->insert($param);
    }
}
