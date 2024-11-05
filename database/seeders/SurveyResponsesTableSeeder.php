<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $data = [
    //         ['category' => '性別', 'subcategory' => '男', 'sample_size' => 2043, 'very_satisfied_pct' => 32.2, 'satisfied_pct' => 48.4, 'neutral_pct' => 17.4, 'dissatisfied_pct' => 1.6, 'very_dissatisfied_pct' => 0.3],
    //         ['category' => '性別', 'subcategory' => '女', 'sample_size' => 2087, 'very_satisfied_pct' => 29.9, 'satisfied_pct' => 49.6, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 1.8, 'very_dissatisfied_pct' => 0.6],
    //         ['category' => '年齡', 'subcategory' => '15~24歲', 'sample_size' => 272, 'very_satisfied_pct' => 42.5, 'satisfied_pct' => 44.1, 'neutral_pct' => 11.4, 'dissatisfied_pct' => 2.0, 'very_dissatisfied_pct' => null],
    //         ['category' => '年齡', 'subcategory' => '25~44歲', 'sample_size' => 2280, 'very_satisfied_pct' => 32.0, 'satisfied_pct' => 47.5, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 1.9, 'very_dissatisfied_pct' => 0.5],
    //         ['category' => '年齡', 'subcategory' => '25~34歲', 'sample_size' => 1083, 'very_satisfied_pct' => 33.2, 'satisfied_pct' => 46.5, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 1.8, 'very_dissatisfied_pct' => 0.4],
    //         ['category' => '年齡', 'subcategory' => '35~44歲', 'sample_size' => 1197, 'very_satisfied_pct' => 30.8, 'satisfied_pct' => 48.4, 'neutral_pct' => 18.1, 'dissatisfied_pct' => 2.1, 'very_dissatisfied_pct' => 0.6],
    //         ['category' => '年齡', 'subcategory' => '45~64歲', 'sample_size' => 1480, 'very_satisfied_pct' => 27.5, 'satisfied_pct' => 52.2, 'neutral_pct' => 18.4, 'dissatisfied_pct' => 1.4, 'very_dissatisfied_pct' => 0.4],
    //         ['category' => '年齡', 'subcategory' => '45~54歲', 'sample_size' => 899, 'very_satisfied_pct' => 28.4, 'satisfied_pct' => 50.0, 'neutral_pct' => 19.7, 'dissatisfied_pct' => 1.3, 'very_dissatisfied_pct' => 0.5],
    //         ['category' => '年齡', 'subcategory' => '55~64歲', 'sample_size' => 581, 'very_satisfied_pct' => 25.8, 'satisfied_pct' => 56.0, 'neutral_pct' => 16.2, 'dissatisfied_pct' => 1.6, 'very_dissatisfied_pct' => 0.3],
    //     ];

    //     DB::table('survey_statistics')->insert($data);
    // }

    public function run()
    {
        $cate = array("性別", "年齡", "教育程度", "婚姻狀況", "職業", "地區", "行業", "員工規模", "每月收入");
        $sub = [
            "男",
            "女",
            "15~24歲",
            "25~44歲",
            "25~34歲",
            "35~44歲",
            "45~64歲",
            "45~54歲",
            "55~64歲",
            "65歲以上",
            "國中及以下",
            "高中（職）",
            "專科及大學",
            "碩士及以上",
            "未婚",
            "有配偶(或同居)",
            "離婚或分居",
            "喪偶",
            "民意代表、主管及經理人員",
            "專業人員",
            "技術員及助理專業人員",
            "事務支援人員",
            "服務及銷售工作人員",
            "農林漁牧業生產人員",
            "技藝有關工作人員",
            "機械設備操作及組裝人員",
            "基層技術工及勞力工",
            "北部地區",
            "中部地區",
            "南部地區",
            "東部地區",
            "農、林、漁、牧業",
            "工業",
            "礦業及土石採取業",
            "製造業",
            "電力及燃氣供應業",
            "用水供應及污染整治業",
            "營建工程業",
            "服務業",
            "批發及零售業",
            "運輸及倉儲業",
            "住宿及餐飲業",
            "出版影音及資通訊業",
            "金融及保險業",
            "不動產業",
            "專業、科學及技術服務業",
            "支援服務業",
            "公共行政及國防;強制性社會安全",
            "教育業",
            "醫療保健及社會工作服務業",
            "藝術、娛樂及休閒服務業",
            "其他服務業",
            "29人以下",
            "30~49人",
            "50~199人",
            "200~499人",
            "500人以上",
            "未滿2.4萬元",
            "2.4萬~未滿2.5萬元",
            "2.5萬~未滿3萬元",
            "3萬~未滿4萬元",
            "4萬~未滿6萬元",
            "6萬~未滿8萬元",
            "8萬~未滿10萬元",
            "10萬元以上"
        ];
        

        for ($i = 0; $i < 50; $i++){
            
            $category = $cate[array_rand($cate)];
            $subcategory = $sub[array_rand($sub)];

            $data = [
                ['category' => $category,
                 'subcategory' => $subcategory,
                 'sample_size' => rand(40,3000),
                 'very_satisfied_pct' => rand(20.0 * 1000, 47.0*1000) / 1000.0,
                 'satisfied_pct' => rand(41.5 * 1000, 57.0*1000) / 1000.0,
                 'neutral_pct' => rand(6.0 * 1000, 28.5*1000) / 1000.0,
                 'dissatisfied_pct' => rand(0.1 * 1000, 2.8*1000) / 1000.0,
                 'very_dissatisfied_pct' => rand(0.1 * 1000, 0.9*1000) / 1000.0
                ]
            ];

            DB::table('survey_responses')->insert($data);
        }
    }
}
