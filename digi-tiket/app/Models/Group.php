<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Group extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id_group';
    public $timestamps = false;
    protected $fillable = ['id_group', 'stud_name', 'YEAR', 'nim_1', 'name_1', 'nim_2', 'name_2', 'nim_3', 'name_3'];
    public $incrementing = false;
}
