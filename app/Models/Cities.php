<?php

namespace App\Models;

use App\Models\Countries;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cities extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = ['name', 'country_id'];

    public $timestamps = true;

    public function country(): BelongsTo
    {
        return $this->belongsTo(Countries::class, 'country_id', 'id');
    }

}
