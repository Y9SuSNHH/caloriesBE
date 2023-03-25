<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['description' => 'desscription blog 1', 'link' => 'images/fullbody1.jpeg', 'image' => 'images/fullbody1.jpeg', 'title' => 'Có nên tập thể dục khi bạn đang mệt mỏi, thiếu ngủ?', 'tag_id' => '6'],
            ['description' => 'desscription blog 2', 'link' => 'images/fullbody2.jpeg', 'image' => 'images/fullbody2.jpeg', 'title' => '4 cách giúp duy trì tập luyện trong những ngày Tết', 'tag_id' => '6'],
            ['description' => 'desscription blog 3', 'link' => 'images/fullbody3.jpeg', 'image' => 'images/fullbody3.jpeg', 'title' => 'Kế hoạch tập luyện trong 7 ngày để giảm cân đón Tết', 'tag_id' => '6'],
            ['description' => 'desscription blog 4', 'link' => 'images/fullbody4.jpeg', 'image' => 'images/fullbody4.jpeg', 'title' => 'Calo và chất dinh dưỡng để cung cấp năng lượng cho hoạt động thể thao', 'tag_id' => '6'],
            ['description' => 'desscription blog 5', 'link' => 'images/fullbody5.jpeg', 'image' => 'images/fullbody5.jpeg', 'title' => '6 động tác giảm khó chịu do đau vai gáy', 'tag_id' => '6'],
            ['description' => 'desscription blog 6', 'link' => 'images/fullbody6.jpeg', 'image' => 'images/fullbody6.jpeg', 'title' => '6 cách giúp người bệnh đái tháo đường sống khỏe trong mùa đông', 'tag_id' => '6'],
            ['description' => 'desscription blog 7', 'link' => 'images/yoga1.jpeg', 'image' => 'images/yoga1.jpeg', 'title' => "Top bài tập giúp siêu sao bóng đá Harry Kane sở hữu body 'nam thần'", 'tag_id' => '6'],
            ['description' => 'desscription blog 8', 'link' => 'images/yoga2.jpeg', 'image' => 'images/yoga2.jpeg', 'title' => 'Tập luyện thường xuyên giúp tăng hiệu quả của tiêm chủng, giảm nguy cơ nhập viện do COVID-19', 'tag_id' => '6'],
            ['description' => 'desscription blog 9', 'link' => 'images/yoga3.jpeg', 'image' => 'images/yoga3.jpeg', 'title' => '5 thói quen tập luyện giúp cơ bắp chậm lão hoá', 'tag_id' => '7'],
            ['description' => 'desscription blog 10', 'link' => 'images/yoga4.jpeg', 'image' => 'images/yoga4.jpeg', 'title' => 'Một số bài tập hiệu quả tại nhà để có chân thon và săn chắc', 'tag_id' => '7'],
            ['description' => 'desscription blog 11', 'link' => 'images/yoga5.jpeg', 'image' => 'images/yoga5.jpeg', 'title' => 'Đau chân, chuột rút khi vận động…, coi chừng mắc hội chứng bẫy động mạch khoeo', 'tag_id' => '7'],
            ['description' => 'desscription blog 12', 'link' => 'images/tocdo1.jpeg', 'image' => 'images/tocdo1.jpeg', 'title' => 'Bạn thường xuyên đi bộ, nhưng có biết đi như thế nào để sống lâu hơn theo khoa học?', 'tag_id' => '7'],
            ['description' => 'desscription blog 13', 'link' => 'images/tocdo2.jpeg', 'image' => 'images/tocdo2.jpeg', 'title' => '6 lý do để tập luyện tim mạch sau tuổi 50', 'tag_id' => '7'],
            ['description' => 'desscription blog 14', 'link' => 'images/thiendinh1.jpeg', 'image' => 'images/thiendinh1.jpeg', 'title' => 'Cách tập luyện hiệu quả cho người bận rộn', 'tag_id' => '7'],
            ['description' => 'desscription blog 15', 'link' => 'images/thiendinh2.jpeg', 'image' => 'images/thiendinh2.jpeg', 'title' => '5 hình thức tập luyện để giữ dáng', 'tag_id' => '8'],
            ['description' => 'desscription blog 16', 'link' => 'images/thiendinh3.jpeg', 'image' => 'images/thiendinh3.jpeg', 'title' => '3 điều bạn nên làm trước khi đi bộ', 'tag_id' => '8'],
            ['description' => 'desscription blog 17', 'link' => 'images/thiendinh4.jpeg', 'image' => 'images/thiendinh4.jpeg', 'title' => '4 nhóm thực phẩm không thể thiếu trong bữa ăn của vận động viên', 'tag_id' => '8'],
            ['description' => 'desscription blog 18', 'link' => 'images/khoidong1.webp', 'image' => 'images/khoidong1.webp', 'title' => 'Ăn đúng - đủ sau tập luyện thể thao giúp cơ thể phục hồi nhanh', 'tag_id' => '8'],
            ['description' => 'desscription blog 19', 'link' => 'images/khoidong2.webp', 'image' => 'images/khoidong2.webp', 'title' => 'Thực phẩm nên ăn và nên tránh trước khi tập luyện thể thao', 'tag_id' => '8'],
            ['description' => 'desscription blog 20', 'link' => 'images/khoidong3.webp', 'image' => 'images/khoidong3.webp', 'title' => 'Tập luyện thể thao một ngày bao nhiêu thời gian là đủ?', 'tag_id' => '8'],
        ];
        foreach ($data as $each) {
            Blog::query()->create($each);
        }
    }
}
