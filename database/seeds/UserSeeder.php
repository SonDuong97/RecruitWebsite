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
				'deleted'=>false

			],
			[
				'name'=>'Nguyễn Ngọc Trung',
				'email'=>'trungnn160697@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>2,
				'deleted'=>false

			],
			[
				'name'=>'Dương Ngọc Sơn',
				'email'=>'sonbom@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>2,
				'deleted'=>false

			],
			[
				'name'=>'Đỗ Thị Hải',
				'email'=>'haipt@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>3,
				'deleted'=>false

			],
			[
				'name'=>'Nguyễn Thị Kiều Thương',
				'email'=>'thuongntk@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>3,
				'deleted'=>false

			],
			[
				'name'=>'Lê Trọng Chung',
				'email'=>'chunglt@gmail.com',
				'password'=>bcrypt('123456'),
				'id_role'=>3,
				'deleted'=>false

			]
		]);
	}
}

