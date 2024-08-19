<?php

namespace App\Models;

use App\Models\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes, TraitUuid;

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;


    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'status',
        'description',
        'requests_additional_id',
        'end_date',
        'categorie_id',
    ];
    
    public function categorie()
    {
      return $this->belongsTo(Categorie::class);
    }
}
