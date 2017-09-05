<?php namespace Mross\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMrossCourses3 extends Migration
{
    public function up()
    {
        Schema::table('mross_courses_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mross_courses_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
