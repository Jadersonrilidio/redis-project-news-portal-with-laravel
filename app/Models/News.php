<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * Attributes Eloquent is allowed to manipulate.
     * 
     * @var array
     */
    protected $fillable = ['title', 'news'];

    /**
     * 
     */
    public function rules()
    {
        //
    }

    /**
     * 
     */
    public function feedback()
    {
        //
    }
}
