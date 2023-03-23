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
            ['description' => 'desscription blog 1', 'link' => 'images/fullbody1.jpeg', 'image' => 'images/fullbody1.jpeg', 'title' => 'title blog  1', 'tag_id' => '6'],
            ['description' => 'desscription blog 2', 'link' => 'images/fullbody2.jpeg', 'image' => 'images/fullbody2.jpeg', 'title' => 'title blog  2', 'tag_id' => '6'],
            ['description' => 'desscription blog 3', 'link' => 'images/fullbody3.jpeg', 'image' => 'images/fullbody3.jpeg', 'title' => 'title blog  3', 'tag_id' => '6'],
            ['description' => 'desscription blog 4', 'link' => 'images/fullbody4.jpeg', 'image' => 'images/fullbody4.jpeg', 'title' => 'title blog  4', 'tag_id' => '6'],
            ['description' => 'desscription blog 5', 'link' => 'images/fullbody5.jpeg', 'image' => 'images/fullbody5.jpeg', 'title' => 'title blog  5', 'tag_id' => '6'],
            ['description' => 'desscription blog 6', 'link' => 'images/fullbody6.jpeg', 'image' => 'images/fullbody6.jpeg', 'title' => 'title blog  6', 'tag_id' => '6'],
            ['description' => 'desscription blog 7', 'link' => 'images/yoga1.jpeg', 'image' => 'images/yoga1.jpeg', 'title' => 'title blog  7', 'tag_id' => '6'],
            ['description' => 'desscription blog 8', 'link' => 'images/yoga2.jpeg', 'image' => 'images/yoga2.jpeg', 'title' => 'title blog  8', 'tag_id' => '6'],
            ['description' => 'desscription blog 9', 'link' => 'images/yoga3.jpeg', 'image' => 'images/yoga3.jpeg', 'title' => 'title blog  9', 'tag_id' => '7'],
            ['description' => 'desscription blog 10', 'link' => 'images/yoga4.jpeg', 'image' => 'images/yoga4.jpeg', 'title' => 'title blog  10', 'tag_id' => '7'],
            ['description' => 'desscription blog 11', 'link' => 'images/yoga5.jpeg', 'image' => 'images/yoga5.jpeg', 'title' => 'title blog  11', 'tag_id' => '7'],
            ['description' => 'desscription blog 12', 'link' => 'images/tocdo1.jpeg', 'image' => 'images/tocdo1.jpeg', 'title' => 'title blog  12', 'tag_id' => '7'],
            ['description' => 'desscription blog 13', 'link' => 'images/tocdo2.jpeg', 'image' => 'images/tocdo2.jpeg', 'title' => 'title blog  13', 'tag_id' => '7'],
            ['description' => 'desscription blog 14', 'link' => 'images/thiendinh1.jpeg', 'image' => 'images/thiendinh1.jpeg', 'title' => 'title blog  14', 'tag_id' => '7'],
            ['description' => 'desscription blog 15', 'link' => 'images/thiendinh2.jpeg', 'image' => 'images/thiendinh2.jpeg', 'title' => 'title blog  15', 'tag_id' => '8'],
            ['description' => 'desscription blog 16', 'link' => 'images/thiendinh3.jpeg', 'image' => 'images/thiendinh3.jpeg', 'title' => 'title blog  16', 'tag_id' => '8'],
            ['description' => 'desscription blog 17', 'link' => 'images/thiendinh4.jpeg', 'image' => 'images/thiendinh4.jpeg', 'title' => 'title blog  17', 'tag_id' => '8'],
            ['description' => 'desscription blog 18', 'link' => 'images/khoidong1.jpeg', 'image' => 'images/khoidong1.jpeg', 'title' => 'title blog  18', 'tag_id' => '8'],
            ['description' => 'desscription blog 19', 'link' => 'images/khoidong2.jpeg', 'image' => 'images/khoidong2.jpeg', 'title' => 'title blog  19', 'tag_id' => '8'],
            ['description' => 'desscription blog 20', 'link' => 'images/khoidong3.jpeg', 'image' => 'images/khoidong3.jpeg', 'title' => 'title blog  20', 'tag_id' => '8'],
        ];
        foreach ($data as $each) {
            Blog::query()->create($each);
        }
    }
}
