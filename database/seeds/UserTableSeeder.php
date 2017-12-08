<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $d=[];
        for($i=0;$i<10;$i++){
        	$data=[];
        	$data['username']=str_random(10);
        	$data['password']=str_random(10);
        	$data['email']=str_random(10);
        	$data['profile']='/uploads/pro/2017-12-05/img_5a26907139975.jpeg';

        	$d[]=$data;
        }

        DB::table('users')->insert($d);
        // DB::table('users')->where('id'.'>'.13)->delete();
    }
}
