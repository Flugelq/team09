<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_statistics', function (Blueprint $table) {
            $table->id(); // 自增的主鍵
            $table->string('category', 50)->comment('統計項目別'); // 統計項目別
            $table->string('subcategory', 50)->comment('細項'); // 細項
            $table->integer('sample_size')->comment('樣本數（人）'); // 樣本數（人）
            $table->decimal('very_satisfied_pct', 5, 2)->comment('很滿意（%）'); // 很滿意（%）
            $table->decimal('satisfied_pct', 5, 2)->comment('滿意（%）'); // 滿意（%）
            $table->decimal('neutral_pct', 5, 2)->comment('普通（%）'); // 普通（%）
            $table->decimal('dissatisfied_pct', 5, 2)->comment('不滿意（%）'); // 不滿意（%）
            $table->decimal('very_dissatisfied_pct', 5, 2)->comment('很不滿意（%）'); // 很不滿意（%）
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
        Schema::dropIfExists('survey_statistics');
    }
}
