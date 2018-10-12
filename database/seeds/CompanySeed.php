<?php

use Illuminate\Database\Seeder;

class CompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
        	['company_name'=>'Công ty TNHH dịch vụ thương mại quảng cáo Sao Việt',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-tnhh-dich-vu-thuong-mai-quang-cao-sao-viet-ntd4967593p1.html'
        	],

        	['company_name'=>'Công ty TNHH Đầu tư Thương mại và Truyền thông Nam Việt',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-tong-cong-ty-co-phan-buu-chinh-viettel-chi-nhanh-hai-ba-trung-ntd4621481p1.html'
        	],

        	['company_name'=>'Tổng công ty Cổ phần Bưu chính Viettel - Chi nhánh Hai Bà Trưng',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-tong-cong-ty-co-phan-buu-chinh-viettel-chi-nhanh-hai-ba-trung-ntd4621481p1.html'
        	],
        	
        	['company_name'=>'Công ty Thành Công Technology',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-thanh-cong-technology-ntd4423437p1.html'
        	],

        	['company_name'=>'Công ty TNHH Thương Mại và Dịch Vụ Phân Phối Ánh Dương',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-tnhh-thuong-mai-va-dich-vu-phan-phoi-anh-duong-ntd1915609p1.html'
        	],

        	['company_name'=>'Vega Corporation',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/vegacorporationl'
        	],

        	['company_name'=>'Công ty Cổ phần Prime Việt Nam',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-co-phan-prime-viet-nam-ntd2888883p1.html'
        	],

        	['company_name'=>'Công ty TNHH dịch vụ thương mại quảng cáo Sao Việt',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-tnhh-dich-vu-thuong-mai-quang-cao-sao-viet-ntd4967593p1.html'
        	],

        	['company_name'=>'Công ty cổ phần tập đoàn Thành Nam',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-co-phan-tap-doan-thanh-nam-ntd4466566p1.html'
        	],

        	['company_name'=>'Công ty KMALL Việt Nam',
        	 'company_logo'=>null,
        	 'company_link'=>'https://vieclam24h.vn/danh-sach-tin-tuyen-dung-cong-ty-kmall-viet-nam-ntd3954510p1.html'
        	],

        	
        ]);
    }
}
