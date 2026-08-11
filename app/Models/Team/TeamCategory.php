<?php

namespace App\Models\Team;

use App\Traits\HasSitemapUrl;
use Illuminate\Database\Eloquent\Model;

class TeamCategory extends Model
{
    use HasSitemapUrl;

   protected $table = 'team_categories';
    protected $fillable = [
        'category','picture','ordering','content','caption','uri','team_parent','status'
    ];

    public function teams(){
        return $this->hasMany('App\Models\Team\TeamModel','category');

    }

}
