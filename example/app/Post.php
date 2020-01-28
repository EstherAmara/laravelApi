<?php

namespace App;

use Illuminate\Database\Eloquent\Model,
    Illuminate\Support\Str;

class Post extends Model
{
    public function path() {
        return url("/posts/{$this->id}-".Str::slug($this->title));
    }
}
