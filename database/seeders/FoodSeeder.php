<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Rau chân vịt', 'image' => 'images/foods/rauchanvit.jpeg', 'description' => 'Rau chân vịt thơm ngon', 'calo' => '8', 'tag_id' => '1'],
            ['name' => 'Dưa leo', 'image' => 'images/foods/dualeo.jpeg', 'description' => 'Dưa leo thơm ngon', 'calo' => '10', 'tag_id' => '1'],
            ['name' => 'Bắp cải', 'image' => 'images/foods/bapcai.jpeg', 'description' => 'Bắp cải thơm ngon', 'calo' => '20', 'tag_id' => '1'],
            ['name' => 'Cà chua', 'image' => 'images/foods/cachua.jpeg', 'description' => 'Cà chua thơm ngon', 'calo' => '20', 'tag_id' => '1'],
            ['name' => 'Cà rốt', 'image' => 'images/foods/carot.jpeg', 'description' => 'Cà rốt thơm ngon', 'calo' => '25', 'tag_id' => '1'],
            ['name' => 'Cam', 'image' => 'images/foods/cam.jpeg', 'description' => 'Cam thơm ngon', 'calo' => '30', 'tag_id' => '1'],
            ['name' => 'Bông cải xanh', 'image' => 'images/foods/bongcaixanh.jpeg', 'description' => 'Bông cải xanh thơm ngon', 'calo' => '32', 'tag_id' => '1'],
            ['name' => 'Táo', 'image' => 'images/foods/tao.jpeg', 'description' => 'Táo thơm ngon', 'calo' => '44', 'tag_id' => '1'],
            ['name' => 'Chuối', 'image' => 'images/foods/chuoi.jpeg', 'description' => 'Chuối thơm ngon', 'calo' => '65', 'tag_id' => '1'],
            ['name' => 'Bắp', 'image' => 'images/foods/bap.jpeg', 'description' => 'Bắp thơm ngon', 'calo' => '130', 'tag_id' => '1'],
            ['name' => 'Tôm', 'image' => 'images/foods/tom.jpeg', 'description' => 'Tôm thơm ngon', 'calo' => '100', 'tag_id' => '3'],
            ['name' => 'Thịt cua', 'image' => 'images/foods/thitcua.jpeg', 'description' => 'Thịt cua thơm ngon', 'calo' => '110', 'tag_id' => '3'],
            ['name' => 'Cá ngừ', 'image' => 'images/foods/cangu.jpeg', 'description' => 'Cá ngừ thơm ngon', 'calo' => '180', 'tag_id' => '3'],
            ['name' => 'Cá hồi', 'image' => 'images/foods/cahoi.jpeg', 'description' => 'Cá hồi thơm ngon', 'calo' => '180', 'tag_id' => '3'],
            ['name' => 'Thịt xông khói', 'image' => 'images/foods/thitxongkhoi.jpeg', 'description' => 'Thịt xông khói thơm ngon', 'calo' => '240', 'tag_id' => '3'],
            ['name' => 'Thịt bò', 'image' => 'images/foods/thitbo.jpeg', 'description' => 'Thịt bò thơm ngon', 'calo' => '280', 'tag_id' => '3'],
            ['name' => 'Thịt lợn', 'image' => 'images/foods/thitlon.jpeg', 'description' => 'Thịt lợn thơm ngon', 'calo' => '290', 'tag_id' => '3'],
            ['name' => 'Thịt gà', 'image' => 'images/foods/thitga.jpeg', 'description' => 'Thịt gà thơm ngon', 'calo' => '200', 'tag_id' => '3'],
            ['name' => 'Thịt vịt', 'image' => 'images/foods/thitvit.jpeg', 'description' => 'Thịt vịt thơm ngon', 'calo' => '430', 'tag_id' => '3'],
            ['name' => 'Xúc xích', 'image' => 'images/foods/xucxich.jpeg', 'description' => 'Xúc xích thơm ngon', 'calo' => '480', 'tag_id' => '3'],
            ['name' => 'Hạt Macca', 'image' => 'images/foods/hatmacca.jpeg', 'description' => 'Hạt Macca thơm ngon', 'calo' => '718', 'tag_id' => '2'],
            ['name' => 'Hạt óc chó', 'image' => 'images/foods/hatoccho.jpeg', 'description' => 'Hạt óc chó thơm ngon', 'calo' => '654', 'tag_id' => '2'],
            ['name' => 'Hạt hạnh nhân', 'image' => 'images/foods/hathanhnhan.jpeg', 'description' => 'Hạt hạnh nhân thơm ngon', 'calo' => '597', 'tag_id' => '2'],
            ['name' => 'Hạt Sachi Inchi', 'image' => 'images/foods/hatsachiinchi.jpeg', 'description' => 'Hạt Sachi Inchi thơm ngon', 'calo' => '70', 'tag_id' => '2'],
            ['name' => 'Hạt Chia', 'image' => 'images/foods/hatchia.jpeg', 'description' => 'Hạt Chia thơm ngon', 'calo' => '486', 'tag_id' => '2'],
            ['name' => 'Hạt Phỉ', 'image' => 'images/foods/hatphi.jpeg', 'description' => 'Hạt Phỉ thơm ngon', 'calo' => '628', 'tag_id' => '2'],
            ['name' => 'Hạt điều', 'image' => 'images/foods/hatdieu.jpeg', 'description' => 'Hạt điều thơm ngon', 'calo' => '551', 'tag_id' => '2'],
            ['name' => 'Hạt dẻ cười', 'image' => 'images/foods/hatdecuoi.jpeg', 'description' => 'Hạt dẻ cười thơm ngon', 'calo' => '562', 'tag_id' => '2'],
            ['name' => 'Hạt bí xanh', 'image' => 'images/foods/hatbixanh.jpeg', 'description' => 'Hạt bí xanh thơm ngon', 'calo' => '559', 'tag_id' => '2'],
            ['name' => 'Bánh chưng', 'image' => 'images/foods/banhchung.jpeg', 'description' => 'Bánh chưng thơm ngon', 'calo' => '181', 'tag_id' => '2'],
            ['name' => 'Bánh giò', 'image' => 'images/foods/banhgio.jpeg', 'description' => 'Bánh giò thơm ngon', 'calo' => '293', 'tag_id' => '2'],
            ['name' => 'Bánh đúc', 'image' => 'images/foods/banhduc.jpeg', 'description' => 'Bánh đúc thơm ngon', 'calo' => '105', 'tag_id' => '2'],
            ['name' => 'Bánh bột lọc', 'image' => 'images/foods/banhbotloc.jpeg', 'description' => 'Bánh bột lọc thơm ngon', 'calo' => '375', 'tag_id' => '2'],
            ['name' => 'Bánh bèo', 'image' => 'images/foods/banhbeo.jpeg', 'description' => 'Bánh bèo thơm ngon', 'calo' => '53', 'tag_id' => '2'],
            ['name' => 'Bánh xèo', 'image' => 'images/foods/banhxeo.jpeg', 'description' => 'Bánh xèo thơm ngon', 'calo' => '315', 'tag_id' => '2'],
            ['name' => 'Kẹo cu đơ', 'image' => 'images/foods/keocudo.jpeg', 'description' => 'Kẹo cu đơ thơm ngon', 'calo' => '500', 'tag_id' => '4'],
            ['name' => 'Kẹo chuối', 'image' => 'images/foods/keochuoi.jpeg', 'description' => 'Kẹo chuối thơm ngon', 'calo' => '410', 'tag_id' => '4'],
            ['name' => 'Kẹo mè xửng', 'image' => 'images/foods/keomexung.jpeg', 'description' => 'Kẹo mè xửng thơm ngon', 'calo' => '517', 'tag_id' => '4'],
            ['name' => 'Kẹo dẻo', 'image' => 'images/foods/keodeo.jpeg', 'description' => 'Kẹo dẻo thơm ngon', 'calo' => '398', 'tag_id' => '4'],
            ['name' => 'Kẹo lạc', 'image' => 'images/foods/keolac.jpeg', 'description' => 'Kẹo lạc thơm ngon', 'calo' => '511', 'tag_id' => '4'],
            ['name' => 'Kẹo mentos', 'image' => 'images/foods/keomentos.jpeg', 'description' => 'Kẹo mentos thơm ngon', 'calo' => '161', 'tag_id' => '4'],
            ['name' => 'Kẹo snickers', 'image' => 'images/foods/keosnickers.jpeg', 'description' => 'Kẹo snickers thơm ngon', 'calo' => '498', 'tag_id' => '4'],
            ['name' => 'Kẹo gừng', 'image' => 'images/foods/keogung.jpeg', 'description' => 'Kẹo gừng thơm ngon', 'calo' => '80', 'tag_id' => '4'],
            ['name' => 'Trà sữa ô long', 'image' => 'images/foods/trasuaolong.jpeg', 'description' => 'Trà sữa ô long thơm ngon', 'calo' => '274', 'tag_id' => '5'],
            ['name' => 'Cà phê sữa', 'image' => 'images/foods/caphesua.jpeg', 'description' => 'Cà phê sữa thơm ngon', 'calo' => '155', 'tag_id' => '5'],
            ['name' => 'Coca Cola', 'image' => 'images/foods/cocacola.jpeg', 'description' => 'Coca Cola thơm ngon', 'calo' => '38', 'tag_id' => '5'],
            ['name' => 'Sinh tố', 'image' => 'images/foods/sinhto.jpeg', 'description' => 'Sinh tố thơm ngon', 'calo' => '290', 'tag_id' => '5'],
            ['name' => 'Trà đào cam sả', 'image' => 'images/foods/tradaocamsa.jpeg', 'description' => 'Trà đào cam sả thơm ngon', 'calo' => '185', 'tag_id' => '5'],
            ['name' => 'Sữa tươi', 'image' => 'images/foods/suatuoi.jpeg', 'description' => 'Sữa tươi thơm ngon', 'calo' => '540', 'tag_id' => '5'],
            ['name' => 'Trà xanh', 'image' => 'images/foods/traxanh.jpeg', 'description' => 'Trà xanh thơm ngon', 'calo' => '265', 'tag_id' => '5'],
        ];
        foreach ($data as $each) {
            Food::query()->create($each);
        }
    }
}
