<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'RETINOL CICA',
            'category_id' => 2,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 100000,
            'stock' => 10,
            'dimensi' => '100ml',
            'image' => 'NTbeautyW_RetinolCica.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'MINI QUICK MASK',
            'category_id' => 2,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 110000,
            'stock' => 10,
            'dimensi' => '100gr',
            'image' => 'NTbeautyW_MiniQuick.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'INNISFREE ESSENCE',
            'category_id' => 2,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 120000,
            'stock' => 10,
            'dimensi' => '100ml',
            'image' => 'NTbeautyW_InnisfreeEssence.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'INNISFREE FOREST',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 130000,
            'stock' => 10,
            'dimensi' => '150ml',
            'image' => 'NTbeautyP_InnisfreeForest.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'KIEHLS CALENDULA',
            'category_id' => 2,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 100000,
            'stock' => 10,
            'dimensi' => '250ml',
            'image' => 'NTbeautyW_KiehlsCalendula.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'DONGINBI',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 110000,
            'stock' => 10,
            'dimensi' => '200ml',
            'image' => 'NTbeautyP_Donginbi.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'DONGINBI MINI',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 60000,
            'stock' => 10,
            'dimensi' => '50ml',
            'image' => 'NTbeautyP_DonginbiMini.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'LOREAL',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 50000,
            'stock' => 10,
            'dimensi' => '50gr',
            'image' => 'NTbeautyP_Loreal.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'LOW PH CLEANSER',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 150000,
            'stock' => 10,
            'dimensi' => '250ml',
            'image' => 'NTbeautyP_LowPH.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'LANEIGE CREAM SKIN',
            'category_id' => 2,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 125000,
            'stock' => 10,
            'dimensi' => '200gr',
            'image' => 'NTbeautyW_Laneige.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'CAPTURE TOTALE',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 110000,
            'stock' => 10,
            'dimensi' => '150gr',
            'image' => 'NTbeautyP_CaptureTotale.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'CLEAN IT ZERO',
            'category_id' => 2,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 115000,
            'stock' => 10,
            'dimensi' => '150gr',
            'image' => 'NTbeautyW_CleanItZero.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'KIEHLS',
            'category_id' => 1,
            'type_id' => 7,
            'brand_id' => 2,
            'price' => 250000,
            'stock' => 10,
            'dimensi' => '500ml',
            'image' => 'NTbeautyP_Kiehls.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SLIP ON PINK',
            'category_id' => 2,
            'type_id' => 6,
            'brand_id' => 1,
            'price' => 225000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Pink.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'HIGH GREY',
            'category_id' => 1,
            'type_id' => 6,
            'brand_id' => 1,
            'price' => 275000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_Grey.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SLIP ON PASTEL',
            'category_id' => 2,
            'type_id' => 6,
            'brand_id' => 1,
            'price' => 255000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Pastel.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SLIP ON ORANGE',
            'category_id' => 1,
            'type_id' => 6,
            'brand_id' => 1,
            'price' => 245000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_Orange.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'HIGH LEOPARD',
            'category_id' => 1,
            'type_id' => 6,
            'brand_id' => 1,
            'price' => 300000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_Leopard.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SLIP ON MAGENTA',
            'category_id' => 2,
            'type_id' => 6,
            'brand_id' => 1,
            'price' => 220000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Magenta.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'JOY DIOR EAU DE PARFUME',
            'category_id' => 2,
            'type_id' => 5,
            'brand_id' => 2,
            'price' => 300000,
            'stock' => 10,
            'dimensi' => '150ml',
            'image' => 'NTbeautyW_JoyDior.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'COCO MADEMOISELLE PARFUME',
            'category_id' => 1,
            'type_id' => 5,
            'brand_id' => 2,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => '150ml',
            'image' => 'NTbeautyW_Coco.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SO SCANDAL PARFUME',
            'category_id' => 2,
            'type_id' => 5,
            'brand_id' => 2,
            'price' => 325000,
            'stock' => 10,
            'dimensi' => '100ML',
            'image' => 'NTbeautyW_Scandal.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'VERSACE CRYSTAL PARFUME',
            'category_id' => 1,
            'type_id' => 5,
            'brand_id' => 2,
            'price' => 250000,
            'stock' => 10,
            'dimensi' => '50ml',
            'image' => 'NTbeautyP_Versace.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'TOMFORD TOBACCO PARFUME',
            'category_id' => 1,
            'type_id' => 5,
            'brand_id' => 2,
            'price' => 275000,
            'stock' => 10,
            'dimensi' => '100ml',
            'image' => 'NTbeautyP_Tomford.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'YSL PARFUME',
            'category_id' => 2,
            'type_id' => 5,
            'brand_id' => 2,
            'price' => 400000,
            'stock' => 10,
            'dimensi' => '200ml',
            'image' => 'NTbeautyP_YSL.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SHORT PANTS - BLUE CREAM',
            'category_id' => 2,
            'type_id' => 4,
            'brand_id' => 1,
            'price' => 200000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_PantsBlueCream.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SHORT PANTS - CREAM BELT',
            'category_id' => 1,
            'type_id' => 4,
            'brand_id' => 1,
            'price' => 210000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_PantsCreamBelt.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SHORT PANTS - PINK PASTEL',
            'category_id' => 2,
            'type_id' => 4,
            'brand_id' => 1,
            'price' => 220000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_PantsPinkPastel.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SHORT PANTS - GREY WHITE',
            'category_id' => 1,
            'type_id' => 4,
            'brand_id' => 1,
            'price' => 230000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_PantsGreyWhite.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SHORT PANTS - CREAM MOCHA',
            'category_id' => 2,
            'type_id' => 4,
            'brand_id' => 1,
            'price' => 240000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_PantsCreamMocha.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SHORT PANTS - NAVY TOSCA',
            'category_id' => 1,
            'type_id' => 4,
            'brand_id' => 1,
            'price' => 250000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_PantsNavyTosca.jpg',
        ]);
        DB::table('products')->insert([
            'name' => '3CE BLUSH ON',
            'category_id' => 2,
            'type_id' => 3,
            'brand_id' => 2,
            'price' => 150000,
            'stock' => 10,
            'dimensi' => '50gr',
            'image' => 'NTbeautyW_3CE.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'ESPOIR EYE SHADOW',
            'category_id' => 2,
            'type_id' => 3,
            'brand_id' => 2,
            'price' => 200000,
            'stock' => 10,
            'dimensi' => '100gr',
            'image' => 'NTbeautyW_Espoir.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'NARS MAKEUP PALLETE',
            'category_id' => 2,
            'type_id' => 3,
            'brand_id' => 2,
            'price' => 300000,
            'stock' => 10,
            'dimensi' => '250gr',
            'image' => 'NTbeautyW_Nars.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'LIZDA LIP TINT SERUM ML',
            'category_id' => 2,
            'type_id' => 3,
            'brand_id' => 2,
            'price' => 150000,
            'stock' => 10,
            'dimensi' => '50ml',
            'image' => 'NTbeautyW_Lizda.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'LIZDA PEACH BLUSH',
            'category_id' => 2,
            'type_id' => 3,
            'brand_id' => 2,
            'price' => 175000,
            'stock' => 10,
            'dimensi' => '100gr',
            'image' => 'NTbeautyW_LizdaBlush.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'DIOR EYE SHADOW PALLETE',
            'category_id' => 2,
            'type_id' => 3,
            'brand_id' => 2,
            'price' => 400000,
            'stock' => 10,
            'dimensi' => '500gr',
            'image' => 'NTbeautyW_Dior.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT BLUE POCKET',
            'category_id' => 1,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'M',
            'image' => 'NTfashionP_TshirtBlue.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT DONT BOTHER',
            'category_id' => 1,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'S',
            'image' => 'NTfashionP_TshirtDontBother.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT CLUB KAOTIKO',
            'category_id' => 1,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'L',
            'image' => 'NTfashionP_TshirtClub.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT USA WHITE',
            'category_id' => 1,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'XXL',
            'image' => 'NTfashionP_TshirtUSA.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT NY NAVY WHITE',
            'category_id' => 1,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'XS',
            'image' => 'NTfashionP_TshirtNY.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT SLICE COLOR',
            'category_id' => 1,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'M',
            'image' => 'NTfashionP_TshirtSlice.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT ADER OVERSIZE',
            'category_id' => 2,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_TshirtAder.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT ORANGE POCKET',
            'category_id' => 2,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'S',
            'image' => 'NTfashionW_TshirtOrange.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT DADDY! WHITE',
            'category_id' => 2,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'M',
            'image' => 'NTfashionW_TshirtDaddy.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT ADER RED',
            'category_id' => 2,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'XS',
            'image' => 'NTfashionW_TshirtAderRed.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT COLORFULL CARTOON',
            'category_id' => 2,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'M',
            'image' => 'NTfashionW_TshirtColorfull.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'T-SHIRT PART TIME',
            'category_id' => 2,
            'type_id' => 2,
            'brand_id' => 1,
            'price' => 350000,
            'stock' => 10,
            'dimensi' => 'M',
            'image' => 'NTfashionW_TshirtPartTime.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'PADLOCK NECKLACE',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 500000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_Padlock.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SNAKE NECKLACE',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 510000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_Snake.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'FLOWER NECKLACE',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 520000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionP_Flower.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'TWO LAYER CHAIN NECKLACE',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 600000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_TwoLayer.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'BUTTERFLY CHAIN NECKLACE',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 610000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Butterfly.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'STARS CHAIN NECKLACE',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 620000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Stars.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'PEARL BUTTERFLY NECKLACE',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 630000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Pearl.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SIMPLE BRACELET',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 100000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Simple.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'LUXURIOUS CHUNKY BRACELET',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 110000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Luxurious.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'ELEGANT LUXURY BRACELET',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 120000,
            'stock' => 10,
            'dimensi' => 'All Size',
            'image' => 'NTfashionW_Elegant.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'TWO FANCY RINGS',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 200000,
            'stock' => 10,
            'dimensi' => '11',
            'image' => 'NTfashionP_TwoFancy.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'THREE FANCY RINGS',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 210000,
            'stock' => 10,
            'dimensi' => '12',
            'image' => 'NTfashionP_ThreeFancy.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'SQUARE RING',
            'category_id' => 1,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 220000,
            'stock' => 10,
            'dimensi' => '13',
            'image' => 'NTfashionP_Square.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'INFINITE RING',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 150000,
            'stock' => 10,
            'dimensi' => '8',
            'image' => 'NTfashionW_Infinite.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'BUTTERFLY RINGS',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 160000,
            'stock' => 10,
            'dimensi' => '9',
            'image' => 'NTfashionW_ButterflyRings.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'GEM RING',
            'category_id' => 2,
            'type_id' => 1,
            'brand_id' => 1,
            'price' => 170000,
            'stock' => 10,
            'dimensi' => '10',
            'image' => 'NTfashionW_Gem.jpg',
        ]);
    }
}
