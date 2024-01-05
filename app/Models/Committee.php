<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Committee extends Model
{
    use HasFactory;
    protected $fillable = [
        'division_id',
        'full_name',
        'call_name',
        'gender',
        'nim',
        'place_born',
        'date_born',
        'origin_address',
        'domicile_address',
        'email',
        'no_wa'
    ];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
