<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run(){
		DB::table('users')->insert([
			[
				'name'=>'Admin',
				'email'=>'admin@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>1,


			],
			[
				'name'=>'Nguyễn Ngọc Trung',
				'email'=>'trungnn160697@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>2,


			],
			[
				'name'=>'Dương Ngọc Sơn',
				'email'=>'sonbom@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>2,


			],
			[
				'name'=>'Đỗ Thị Hải',
				'email'=>'haipt@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>3,


			],
			[
				'name'=>'Nguyễn Thị Kiều Thương',
				'email'=>'thuongntk@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>3,


			],
			[
				'name'=>'Lê Trọng Chung',
				'email'=>'chunglt@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>3,

			]
		]);
	}
}

