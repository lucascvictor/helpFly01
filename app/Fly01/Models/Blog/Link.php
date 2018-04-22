<?php

namespace App\Fly01\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'links';

    /**
     * The mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['name', 'link'];
}
