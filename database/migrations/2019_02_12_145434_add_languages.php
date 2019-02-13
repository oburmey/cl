<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguages extends Migration
{
    private $languagesList = [
        'PHP','JS','C++','C','JAVA','RUBY','QBASIC','PASCAL'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach ($this->languagesList as $language){
            \Illuminate\Support\Facades\DB::table('languages')->insert(['language'=>$language]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\DB::table('languages')->truncate();
    }
}
