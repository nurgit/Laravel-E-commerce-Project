<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('admins')->delete();
        $adminRecords=[
            [
                'id'=>1,'name'=>'admin','type'=>'admin','mobil'=>'01303156230','email'=>'nur80659@gmail.com'
                ,'password'=>'','image'=>'','status'=>1,
            ],
        ];
        foreach ($adminRecords as $key => $record){
            \App\Admin::create($record);
        }
    }
}
