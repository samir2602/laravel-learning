<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    protected $table = 'task_lists';

    public function tasks(){
        return $this->hasMany(Task::class, 'task_list_id');
    }
}
