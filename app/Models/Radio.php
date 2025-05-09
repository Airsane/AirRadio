<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    const DEFAULT_ICON = "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Icon-round-Question_mark.svg/1200px-Icon-round-Question_mark.svg.png";
    protected $fillable = ['name', 'url', 'icon', 'language', 'favorite'];


    public function isFavorite()
    {
        return $this->favorite;
    }

    public function toggleFavorite()
    {
        $this->favorite = !$this->favorite;
        $this->save();
    }
}
