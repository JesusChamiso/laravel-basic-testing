<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    // Mutador
    public function setNameAttribute($value) {
        $this->attributes['name'] = strtolower($value);
    }
    // Accesor
    public function getSlugAttribute() {
        return str_replace(' ', '-', $this->name);
    }
    public function href() {
        return "blog/{$this->slug}";
    }
}
