<?php

namespace App\Models\Redis;

use Ken\Contracts\CreateIndex;
use Ken\Models\Model;

class Post extends Model implements CreateIndex
{
    public function prefix(): string
    {
        return 'post';
    }

    public $timestamps = true;
    protected $fillable = [
        'id',
        'title',
        'content',
    ];

    public function getFielDataType(): array
    {
        return [

        ];
    }
}
