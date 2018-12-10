<?php

use Illuminate\Database\Seeder;

class JobDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('job_details')->insert([
    		[
    			'salary'=>'15 – 20 triệu',
    			'experience'=>'1 năm',
    			'education'=>'Trung cấp',
    			'quantity'=>6,
    			'position'=>'Chuyên viên - Nhân viên ',
    			'gender'=>'Không yêu cầu',
    			'age'=>'Trên 20',
    			'expiration_date'=>'21/01/2019',
    			'job_description'=>'-	Giới thiệu, tư vấn, giải thích về quyền lợi cho khách hàng. Hướng dẫn, mời khách hàng tham gia các chương trình, sự kiện mà công ty đang phối hợp với các ban ngành trung ương tổ chức. <br>  -	Đàm phán, thương lượng, xúc tiến và thực hiện các thủ tục ký kết các hợp đồng truyền thông, quảng cáo thương hiệu với các khách hàng.<br>  -	Chi tiết sẽ được trao đổi qua quá trình phỏng vấn. Đồng thời, trong quá trình thử việc, nhân viên sẽ được đào tạo quy trình làm việc một cách chuyên nghiệp để đạt hiệu quả cao nhất trong công việc.',
    			'benefit'=>'-	Lương cơ bản: 5-7 triệu / tháng, hoa hồng: 15-30%, thu nhập không giới hạn, thưởng theo chương trình.<br>  -	Chế độ đãi ngộ đầy đủ theo quy định của Luật lao động.<br>  -	Làm việc theo giờ hành chính, nghỉ chiều thứ bảy và ngày chủ nhật.<br>  -	Làm việc trong môi trường năng động, phát huy hết khả năng của bản thân, nâng cao thu nhập.<br>  -	Được làm việc, giao lưu cùng với các Lãnh đạo nhà nước cấp cao, các Tập đoàn lớn, Doanh nghiệp trong và ngoài nước.',
    			'other_requirement'=>'-	Tốt nghiệp từ Trung cấp trở lên, ưu tiên ứng viên tốt nghiệp chuyên ngành Marketing, Quản trị kinh doanh, Ngoại thương, Kinh tế, Báo chí, Quan hệ công chúng…<br>  -	Chưa có kinh nghiệm được đào tạo, ưu tiên ứng viên đã có kinh nghiệm trong lĩnh vực truyền thông, tổ chức sự kiện, quảng cáo, báo chí.<br>  -	Có khả năng giao tiếp, tư vấn, trình bày, thuyết phục, đàm phán tốt.<br>  -	Có khả năng làm việc độc lập cũng như làm việc nhóm tốt. <br>  -	Năng động, nhiệt tình, có trách nhiệm trong công việc.'
            ]
        ]);
    }
}

