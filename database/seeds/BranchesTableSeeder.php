<?php

use Illuminate\Database\Seeder;
use App\Branch;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = new Branch;
        $branch->title = 'สาขาแรก';
        $branch->detail = 'สาขาแห่งแรก';
        $branch->save();

        factory(Branch::class, 5)->create();
    }
}
