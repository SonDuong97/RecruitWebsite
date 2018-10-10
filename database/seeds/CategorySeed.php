<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name'=>'Nhân viên kinh doanh'],
        	['name'=>'Kế toán-Kiểm toán'],
        	['name'=>'Hành chính-Văn phòng'],
        	['name'=>'Bán hàng'],
        	['name'=>'Tư vấn'],
        	['name'=>'Marketing-PR'],
        	['name'=>'Xây dựng'],
        	['name'=>'IT phần mềm'],
        	['name'=>'Điện-Điện tử-Điện lạnh'],
        	['name'=>'Cơ khí-Chế tạo'],
        	['name'=>'Y tế-Dược'],
        	['name'=>'Nhân sự'],
        	['name'=>'Kiến trúc-TK nội thất'],
        	['name'=>'Giáo dục-Đào tạo'],
        	['name'=>'Bảo hiểm'],
        	['name'=>'Kỹ thuật'],
        	['name'=>'Biên-Phiên dịch'],
        	['name'=>'Ngoại thương-Xuất nhập khẩu'],
        	['name'=>'Ngân hàng'],
        	['name'=>'Khách sạn-Nhà hàng'],
        	['name'=>'Dịch vụ'],
        	['name'=>'Kho vận-Vật tư'],
        	['name'=>'Thư ký-Trợ lý'],
        	['name'=>'Dệt may - Da giày'],
        	['name'=>'Thiết kế-Mỹ thuật'],
        	['name'=>'IT phần cứng/mạng'],
        	['name'=>'Thiết kế đồ hoạ web'],
        	['name'=>'Điện tử viễn thông'],
        	['name'=>'Công nghệ thông tin'],
        	['name'=>'Ngành nghề khác'],

        ]);
    }
}
