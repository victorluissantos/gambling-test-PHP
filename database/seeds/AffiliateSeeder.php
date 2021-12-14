<?php

use Illuminate\Database\Seeder;
use App\Models\Affiliate;

// use File;

class AffiliateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Affiliate::truncate();

        $json = File::get("database/data/affiliates.json");

        $affiliates = json_decode($json);

        foreach ($affiliates as $key => $value) {

            Affiliate::create([
                "id" => $value->affiliate_id,
                "name" => $value->name,
                "latitude" => $value->latitude,
                "longitude" => $value->longitude
            ]);

        }
    }
}
