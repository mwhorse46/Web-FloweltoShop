<?php

use Illuminate\Database\Seeder;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->bridal(1);
        $this->christmas(2);
        $this->hamper(3);
    }

    private function bridal($category_id) {
        DB::table('flowers')->insert([
            'name' => '3 Roses - "I Love You"',
            'price' => 69000,
            'description' => 'This classic bouquet consists of roses with the color of your choice as well as filler flowers to complete the look.',
            'image' => 'public/images/1603369913-3-roses-i-love-you.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => '36 Premium Roses with Gypsophila',
            'price' => 199000,
            'description' => 'The meaning of 36 Roses - "I\'m head over heels in love" or "I will remember our romantic moments"',
            'image' => 'public/images/1603369913-premium-rose.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Autumn Surprise',
            'price' => 128000,
            'description' => 'Our romantic and most popular autumn arrangement! Curate withred calla lilies, rice flowers, scabiosa, royal purple cotinus and garden roses.',
            'image' => 'public/images/1603369913-autumn-surprise.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Baby\'s Breath Bouquet',
            'price' => 79000,
            'description' => 'The iconic symbol of long-lasting love, this fluffy bouquet exudes youthfulness, playful and charming in its simplicity. Bring a warm blush to your love one\'s face today!',
            'image' => 'public/images/1603369913-babys-breath.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Bashful Bunny Newborn Gift Box',
            'price' => 208000,
            'description' => 'One of a kind Adorable Bashful Bunny Newborn Gift Box. Nothing is more exciting than celebrating the arrival of a new baby, it\'s the perfect gift to congratulate the new parents.',
            'image' => 'public/images/1603369913-bashful-new-born.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Blush Italian Ranunculus and Peony Bouquet',
            'price' => 179000,
            'description' => 'The italian cloony ranunculus in this bouquet are just as statement-making as the fluffy peonies.',
            'image' => 'public/images/1603369913-blush-italian-ranunculus.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Boba Gift Set',
            'price' => 108000,
            'description' => 'A dried and preserved arrangement of rose, hydrangea, carnation, daisy.',
            'image' => 'public/images/1603369913-boba-gift-set.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Bridal Bouquet',
            'price' => 119000,
            'description' => 'Our selection of Bridal Hand Bouquet for your big day!',
            'image' => 'public/images/1603369913-bridal-bouquet.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Cafe Latte Rose Arrangement',
            'price' => 198000,
            'description' => 'An elegant combination of preserved cafe latte rose, cotton plant from Israel and dry floral arrangements from Italy.',
            'image' => 'public/images/1603369913-cafe-latte-rose.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Candy Cane Lane',
            'price' => 78000,
            'description' => 'Christmas floral gift specially curated by our florists. The white and gold vase is curated with dark red preserved rose, pink preserved hydrangea, silver brunia, pinecone (sprayed with snow), 3 candy canes and preserved white ruscus. It\'s complete with fairy lights.',
            'image' => 'public/images/1603369913-candy-cane-lane.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Chic Femme',
            'price' => 139000,
            'description' => 'Classic floral arrangement specially curated with white hydrangea, veronica, little daisy, love-in-a-mist, and kenyan roses.',
            'image' => 'public/images/1603369913-chic-femme.jpg',
            'category_id' => $category_id,
        ]);
    }

    private function christmas($category_id) {
        DB::table('flowers')->insert([
            'name' => 'Christmas Wonderland',
            'price' => 255000,
            'description' => 'Winter wonderland box: roses; matthiolas; asparagus; scabiosa; pinecones; silver brunias and suitable fillers for the perfect christmas gift box.It will be delivered together with the christmas ornaments and fairy lights which can last for 4 hours.',
            'image' => 'public/images/1603369913-christmas-wonderland.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Christmas Wreath',
            'price' => 75000,
            'description' => 'Each arrangement is an individual made specially and exclusively for you. Final product may not resemble picture shown entirely.',
            'image' => 'public/images/1603369913-christmas-wreath.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Fresh Petite Christmas Tree',
            'price' => 120000,
            'description' => 'Freshly decorated mini pine Christmas Trees that warms the soul and makes everything magical, it is specially curated to celebrate this joyous season.',
            'image' => 'public/images/1603369913-christmas-tree.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Grand Christmas Box',
            'price' => 255000,
            'description' => 'Take home this deluxe box filled with kenyan roses, tulips, fresh pine leaves, pine cones, cotton plant - adorned with 5 Christmas ornaments and 3 candy canes! Like a Christmas tree, we\'ve added fairy lights to complete this look.',
            'image' => 'public/images/1603369913-grandchristmas.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Joy Of Christmas Teacup',
            'price' => 118000,
            'description' => 'Our florists have curated this teacup especially for the festive season. This whismical teacup is filled with an assortment of pine leaves, winterberry, mini pampas, cinnamon cloves, ixodia and a pine cone - wrapped up in fairy lights!',
            'image' => 'public/images/1603369913-christmas-teacup.jpg',
            'category_id' => $category_id,
        ]);
    }

    private function hamper($category_id) {
        DB::table('flowers')->insert([
            'name' => 'Gin O\'Clock',
            'price' => 228000,
            'description' => 'Signature round flower box-round, specially curated for the gin lovers out there.',
            'image' => 'public/images/1603369913-gin.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'Jacob\'s Creek Box',
            'price' => 128000,
            'description' => 'Hydrangea, ocean song roses and suitable filler flowers in our signature round box. This arrangement comes with a choice of the bottle Jacob\'s Creek Wine.',
            'image' => 'public/images/1603369913-jacob-creek.jpg',
            'category_id' => $category_id,
        ]);

        DB::table('flowers')->insert([
            'name' => 'On Cloud Nine Floral Box',
            'price' => 108000,
            'description' => 'A box of colorful baby\'s breath and cotton plant from Israel. Complete with a fluffy Jellycat cloud that was specially picked by our florist.',
            'image' => 'public/images/1603369913-on-cloud-nine.jpg',
            'category_id' => $category_id,
        ]);
    }
}
