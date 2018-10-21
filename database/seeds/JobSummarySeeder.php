<?php

use Illuminate\Database\Seeder;

class JobSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('job_summaries')->insert([
        	['title'=>'Nhân Viên Kinh Doanh Mảng Truyền Thông, Tổ Chức Sự Kiện (Thu Nhập Từ 10 Triệu Đến 20 Triệu / Tháng',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>1,
        	 'id_company'=>1,
        	 'id_job_detail'=>1
        	],
        	['title'=>'Nhân Viên Kinh Doanh (Thu Nhập 10 - 12 Triệu / Tháng) Không Áp Doanh Số',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>1,
        	 'id_company'=>2,
        	 'id_job_detail'=>2
        	],
        	['title'=>'Nhân Viên Bán Hàng Honda Tại Hà Nội',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>1,
        	 'id_company'=>3,
        	 'id_job_detail'=>3
        	],
        	['title'=>'Nhân Viên Kinh Doanh - Mức Lương 10 – 15 Triệu',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>1,
        	 'id_company'=>4,
        	 'id_job_detail'=>4
        	],
        	['title'=>'Nhân Viên IT',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>8,
        	 'id_company'=>3,
        	 'id_job_detail'=>5
        	],
        	['title'=>'Lập Trình Viên - Frontend Developer (Angular / React / Vuejs) - Thu Nhập 15-20 Triệu / Tháng',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>8,
        	 'id_company'=>3,
        	 'id_job_detail'=>6
        	],
        	['title'=>'Nhân Viên Kinh Doanh Lương Cơ Bản Từ 7 Triệu Trở Lên',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>1,
        	 'id_company'=>7,
        	 'id_job_detail'=>7
        	],
        	['title'=>'Chuyên Viên Tư Vấn Tài Chính',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>5,
        	 'id_company'=>8,
        	 'id_job_detail'=>8
        	],
        	['title'=>'Chuyên Viên Phát Triển Kinh Doanh Gcafe',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>6,
        	 'id_company'=>9,
        	 'id_job_detail'=>9
        	],
        	['title'=>'Nhân Viên Kinh Doanh (Có Lương Cứng)',
        	 'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi natus excepturi quisquam, eos accusantium dicta illo aliquid, quod quo praesentium veritatis ea sit rem nihil, fugit ipsum repellendus impedit est mollitia. Illum, quo ipsum repudiandae animi dolor corporis blanditiis aut eaque unde voluptas adipisci aspernatur sed saepe, quam illo accusamus.',
        	 'id_category'=>1,
        	 'id_company'=>10,
        	 'id_job_detail'=>10
        	],
        ]);
    }
}
