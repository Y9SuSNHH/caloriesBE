<?php

namespace Database\Seeders;

use App\Enums\TagTypeEnum;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type' => TagTypeEnum::FOOD, 'name' => 'rau củ quả', 'description' => 'rau củ quả'],
            ['type' => TagTypeEnum::FOOD, 'name' => 'ngũ cốc', 'description' => 'ngũ cốc'],
            ['type' => TagTypeEnum::FOOD, 'name' => 'thịt cá', 'description' => 'thịt cá'],
            ['type' => TagTypeEnum::FOOD, 'name' => 'bánh kẹo', 'description' => 'bánh kẹo'],
            ['type' => TagTypeEnum::FOOD, 'name' => 'đồ uống', 'description' => 'đồ uống'],
            ['type' => TagTypeEnum::BLOG, 'name' => 'hình ảnh', 'description' => 'hình ảnh'],
            ['type' => TagTypeEnum::BLOG, 'name' => 'thủ thuật', 'description' => 'thủ thuật'],
            ['type' => TagTypeEnum::BLOG, 'name' => 'tập luyện', 'description' => 'tập luyện'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'bụng', 'description' => 'bụng'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'tay', 'description' => 'tay'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'chân', 'description' => 'chân'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'toàn thân', 'description' => 'toàn thân'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'yoga', 'description' => 'yoga'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'mạnh', 'description' => 'mạnh'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'tốc độ', 'description' => 'tốc độ'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'khởi động', 'description' => 'khởi động'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'gym', 'description' => 'gym'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'dance', 'description' => 'dance'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'thiền định', 'description' => 'thiền định'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'bmi thiếu cân', 'description' => 'bmi thiếu cân'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'bmi bình thường', 'description' => 'bmi bình thường'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'bmi thừa cân', 'description' => 'bmi thừa cân'],
            ['type' => TagTypeEnum::WORKOUT, 'name' => 'bmi béo phì', 'description' => 'bmi béo phì'],        ];
        foreach($data as $each){
            Tag::query()->create($each);
        }
    }
}
