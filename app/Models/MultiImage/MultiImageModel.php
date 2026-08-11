<?php

namespace App\Models\MultiImage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class MultiImageModel extends Model
{
    use HasFactory;

    protected $table = 'multi_images';

    protected $fillable = [
        'imageable_type',
        'imageable_id',
        'type',
        'file_name',
        'title',
        'description',
        'alt',
        'ordering',
    ];

    public function multiImageable(): MorphTo
    {
        return $this->morphTo();
    }
}
