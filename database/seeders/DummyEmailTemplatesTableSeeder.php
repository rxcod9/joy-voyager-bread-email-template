<?php

namespace Joy\VoyagerBreadEmailTemplate\Database\Seeders;

use Joy\VoyagerBreadEmailTemplate\Models\EmailTemplate;
use Illuminate\Database\Seeder;

class DummyEmailTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        EmailTemplate::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'EmailTemplate ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'EmailTemplate Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
