<?php namespace Mross\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrossCourses2 extends Migration
{
    public function up()
    {
        Schema::table('mross_courses_', function($table)
        {
            $table->string('price')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('mross_courses_', function($table)
        {
            $table->dateTime('price')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
