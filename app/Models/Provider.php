<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';
    protected $primaryKey = 'id';
    protected $fillable = ['name_provider', 'link','user','password'];


public function teams()
{
    return $this->belongsToMany('App\Models\Team','team_provider','team_id','provider_id');
}

    public function server()
    {
        return $this->hasMany(Serve::class);

    }
}
