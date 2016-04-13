<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'The Great Gatsby',
                    'author' => 'F. Scott Fitzgerald',
                    'published' => 1925,
                    'cover' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/the-great-gatsby-francis-scott-fitzgerald/1116668135?ean=9780743273565',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'The Bell Jar',
                    'author' => 'Sylvia Plath',
                    'published' => 1963,
                    'cover' => 'http://img1.imagesbn.com/p/9780061148514_p0_v2_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/bell-jar-sylvia-plath/1100550703?ean=9780061148514',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'I Know Why the Caged Bird Sings',
                    'author' => 'Maya Angelou',
                    'published' => 1969,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);
                
                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'The Silent Speaker',
                    'author' => 'Rex Stout',
                    'published' => 1946,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'No Exit',
                    'author' => 'Jean-Paul Sartre',
                    'published' => 1944,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'Jane Eyre',
                    'author' => 'Charlotte Brontë',
                    'published' => 1847,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'Atlas Shrugged',
                    'author' => 'Ayn Rand',
                    'published' => 1957,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'Future Shock',
                    'author' => 'alvin toffler',
                    'published' => 1970,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'I, Robot',
                    'author' => 'Isaac Asimov',
                    'published' => 1950,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);

                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'Harry Potter',
                    'author' => 'J. K. Rowling',
                    'published' => 1980,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);
                
                DB::table('books')->insert([
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                    'title' => 'Harry Potter Strikes Back',
                    'author' => 'J. K. Rowling',
                    'published' => 1984,
                    'cover' => 'http://img1.imagesbn.com/p/9780345514400_p0_v1_s114x166.JPG',
                    'purchase_link' => 'http://www.barnesandnoble.com/w/i-know-why-the-caged-bird-sings-maya-angelou/1100392955?ean=9780345514400',
                ]);
        }
}
