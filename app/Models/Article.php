<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['categorties_id', 'title', 'slug', 'desc', 'img', 'views', 'status', 'publish_date'];


    public function Categorty(): BelongsTo
    {
        return $this->belongsTo(Categorty::class, 'categorties_id', 'id');
    }
}
