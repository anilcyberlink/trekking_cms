<?php

namespace App\Models\Posts;

use App\Traits\HasSitemapUrl;
use Illuminate\Database\Eloquent\Model;
use App\Models\SeoMeta;

class AssociatedPostModel extends Model
{
    use HasSitemapUrl;

    protected $table = 'cl_associated_posts';
    protected $fillable = ['post_id', 'title', 'brief', 'content', 'thumbnail', 'ordering', 'uri', 'page_key','show_in_home'];
    public function seo()
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }

    protected static function booted()
    {
        static::deleting(function ($model) {
            $model->slugs()->delete();
        });
    }
}
