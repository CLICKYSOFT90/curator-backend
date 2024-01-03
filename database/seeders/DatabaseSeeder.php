<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            GenreSeeder::class,
            SubGenreSeeder::class,
            LyricLanguageSeeder::class,
            ThresholdSeeder::class,
            FaqSeeder::class,
            AboutUsSeeder::class,
            TermAndConditionSeeder::class,
            PrivacyPolicySeeder::class,
            GlobalSettingSeeder::class,
            RoleSeeder::class,
            AdminSeeder::class,
            ArtistSeeder::class,
            LabelSeeder::class,
            CuratorSeeder::class,
            InfluencerSeeder::class,
            CampaignSeeder::class,
        ]);
    }
}
