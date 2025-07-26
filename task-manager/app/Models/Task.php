<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'task_list_id'];

    public function taskList(){
        return $this->belongsTo(TaskList::class, 'task_list_id');
    }
}
