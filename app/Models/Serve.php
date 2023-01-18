<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
    use HasFactory;
     protected $table='serves';
    protected $primaryKey='id';
    protected $guarded = [];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}
