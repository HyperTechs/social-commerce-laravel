<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new \App\Product([
        'imagePath' => 'https://s-media-cache-ak0.pinimg.com/564x/cb/1b/27/cb1b277724bdee673ef2f0b3c9881ec4.jpg',
        'title' => 'Trendy shirt',
        'description' => 'Just a random description for a trendy shirt.',
        'price' => 10
      ]);
      $product->save();
      $product = new \App\Product([
        'imagePath' => 'http://clothing.beautysay.net/wp-content/uploads/images/womens-cheap-clothing-stores-6.jpg',
        'title' => 'Pink sweater',
        'description' => 'Just a random description for a Pink sweater.',
        'price' => 12
      ]);
      $product->save();
      $product = new \App\Product([
        'imagePath' => 'http://www.buyingtide.com/media/catalog/product/cache/1/image/1200x1200/9df78eab33525d08d6e5fb8d27136e95/w/h/wholesale_plus_size_clothing_from_china_autumn_dress_k1012728_Coffee1.jpg',
        'title' => 'Green dress',
        'description' => 'Just a random description for a Green Dress',
        'price' => 20
      ]);
      $product->save();
      $product = new \App\Product([
        'imagePath' => 'http://i.ebayimg.com/00/s/NTAwWDUwMA==/z/rLUAAMXQrhdTVmZ1/$_3.JPG?set_id=2',
        'title' => 'Stripe dress',
        'description' => 'Just a random description for a Stripe dress',
        'price' => 30
      ]);
      $product->save();
      $product = new \App\Product([
        'imagePath' => 'http://www.lfshelties.co.uk/images/vmtt_img/Discount%20Woman%20Clothes%20T-Shirts%20Eleven%20Paris%20Outlet%20147.jpg',
        'title' => 'Deep shirt',
        'description' => 'Just a random description for a Deep shirt',
        'price' => 8
      ]);
      $product->save();
      $product = new \App\Product([
        'imagePath' => 'http://assets.academy.com/mgen/51/10779051.jpg?is=500,500',
        'title' => 'Swimsuit',
        'description' => 'Just a random description for a Swimsuit',
        'price' => 10
      ]);
      $product->save();
    }
}
