<?php namespace Mross\Courses\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMrossCourses extends Migration
{
    public function up()
    {
        Schema::create('mross_courses_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 0)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mross_courses_');
    }
}
