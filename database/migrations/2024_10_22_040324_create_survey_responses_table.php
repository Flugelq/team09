<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_responses', function (Blueprint $table) {
            $table->id(); // 自增的主鍵
            $table->string('category', 50)->comment('統計項目別'); // 統計項目別
            $table->string('subcategory', 50)->comment('細項'); // 細項
            $table->integer('sample_size')->comment('樣本數（人）'); // 樣本數（人）
            $table->double('very_satisfied_pct')->comment('很滿意（%）'); // 很滿意（%）
            $table->double('satisfied_pct')->comment('滿意（%）'); // 滿意（%）
            $table->double('neutral_pct')->comment('普通（%）'); // 普通（%）
            $table->double('dissatisfied_pct')->comment('不滿意（%）'); // 不滿意（%）
            $table->double('very_dissatisfied_pct')->comment('很不滿意（%）'); // 很不滿意（%）
            $table->timestamps(); // 自動管理 created_at 和 updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_responses');
    }
}
