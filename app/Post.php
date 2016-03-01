<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'titulo',
        'save_to'    => 'slug',
    ];

    protected $fillable = [
        'categoria_id',
        'slug',
    	'titulo',    	
    	'texto',
        'foto'
    ];

    public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


  