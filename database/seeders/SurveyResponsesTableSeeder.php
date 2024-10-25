<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SurveyResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category' => '性別', 'subcategory' => '男', 'sample_size' => 2043, 'very_satisfied_pct' => 32.2, 'satisfied_pct' => 48.4, 'neutral_pct' => 17.4, 'dissatisfied_pct' => 1.6, 'very_dissatisfied_pct' => 0.3],
            ['category' => '性別', 'subcategory' => '女', 'sample_size' => 2087, 'very_satisfied_pct' => 29.9, 'satisfied_pct' => 49.6, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 1.8, 'very_dissatisfied_pct' => 0.6],
            ['category' => '年齡', 'subcategory' => '15~24歲', 'sample_size' => 272, 'very_satisfied_pct' => 42.5, 'satisfied_pct' => 44.1, 'neutral_pct' => 11.4, 'dissatisfied_pct' => 2.0, 'very_dissatisfied_pct' => null],
            ['category' => '年齡', 'subcategory' => '25~44歲', 'sample_size' => 2280, 'very_satisfied_pct' => 32.0, 'satisfied_pct' => 47.5, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 1.9, 'very_dissatisfied_pct' => 0.5],
            ['category' => '年齡', 'subcategory' => '25~34歲', 'sample_size' => 1083, 'very_satisfied_pct' => 33.2, 'satisfied_pct' => 46.5, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 1.8, 'very_dissatisfied_pct' => 0.4],
            ['category' => '年齡', 'subcategory' => '35~44歲', 'sample_size' => 1197, 'very_satisfied_pct' => 30.8, 'satisfied_pct' => 48.4, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 2.1, 'very_dissatisfied_pct' => 0.6],
            ['category' => '年齡', 'subcategory' => '45~64歲', 'sample_size' => 1480, 'very_satisfied_pct' => 27.5, 'satisfied_pct' => 52.2, 'neutral_pct' => 18.4, 'dissatisfied_pct' => 1.4, 'very_dissatisfied_pct' => 0.4],
            ['category' => '年齡', 'subcategory' => '45~54歲', 'sample_size' => 899, 'very_satisfied_pct' => 28.4, 'satisfied_pct' => 50.0, 'neutral_pct' => 19.7, 'dissatisfied_pct' => 1.3, 'very_dissatisfied_pct' => 0.5],
            ['category' => '年齡', 'subcategory' => '55~64歲', 'sample_size' => 581, 'very_satisfied_pct' => 25.8, 'satisfied_pct' => 56.0, 'neutral_pct' => 16.2, 'dissatisfied_pct' => 1.6, 'very_dissatisfied_pct' => 0.3],
        ];

        DB::table('survey_statistics')->insert($data);
    }
}
