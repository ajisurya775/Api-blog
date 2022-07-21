<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get all of the comments for the Article
     *
     * @return HasMany
     */
    public function komentar(): HasMany
    {
        return $this->hasMany(ArticleComment::class);
    }
}
