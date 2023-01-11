<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $fillable = ['name_team', 'number_mailer'];

    public function providers()
{
    return $this->belongsToMany('App\Models\Provider','team_provider','provider_id','team_id');
}
}
