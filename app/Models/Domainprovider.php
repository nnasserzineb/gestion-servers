<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domainprovider extends Model
{
    use HasFactory;
    protected $table='domainproviders';
    protected $primaryKey='id';
    protected $guarded=[];

    public function domain()
    {
        return $this->hasMany(Domain::class);

    }
}
