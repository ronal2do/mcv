<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Categoria extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'titulo',
        'save_to'    => 'slug',
    ];

    protected $fillable = [
    	'titulo',
    	'slug'
    ];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
