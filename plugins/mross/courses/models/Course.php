<?php namespace Mross\Courses\Models;

use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mross_courses_';

    /* Relations */

    public $attachOne = [
        'icon' => 'System\Models\File'
    ];

    public $attachMany = [
        'course_gallery' => 'System\Models\File'
    ];
}