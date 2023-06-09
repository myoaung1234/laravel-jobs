<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'company',
        'company_logo',
        'category',
        'salary',
        'description',
        'author'
    ];
    public  function author()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
