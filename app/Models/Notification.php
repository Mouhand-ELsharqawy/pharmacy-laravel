<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'type', 'message', 'employees_id'];

    public function employee(){
        $this->belongsTo(Employee::class);
    }
}
