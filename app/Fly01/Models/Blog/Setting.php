<?php

namespace App\Fly01\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = ['key', 'value'];

    /**
     * Disable timestamps record.
     */
    public $timestamps = false;
}
