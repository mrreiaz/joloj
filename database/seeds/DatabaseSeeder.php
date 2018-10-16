<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
         $this->call(UsersSeed::class);
         $this->call(RolesSeed::class);
         $this->call(RoleUsersSeed::class);
         $this->call(ActivationsSeed::class);
         $this->call(RemindersSeed::class);
         $this->call(PersistencesSeed::class);
         $this->call(CategoriesTableSeed::class);
         $this->call(TagTableSeed::class);
         $this->call(SlidersTableSeed::class);
        //  $this->call(ProductsTableSeed::class);
         $this->call(FooterTableSeeder::class);
         $this->call(TestimonialTableSeed::class);
        //  $this->call(CategoryProductTableSeed::class);
         $this->call(BlogTableSeed::class);
         $this->call(CommentTableSeeder::class);
         $this->call(ContactTableSeeder::class);
         $this->call(OurTeamTableSeeder::class);
    }
}
