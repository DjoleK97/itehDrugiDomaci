<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;

    protected $fillable = ["name", 'address', 'phone', 'email'];


    public function analyses()
    {
        return $this->hasMany(LaboratoryAnalysis::class);
    }
}
