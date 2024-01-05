<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'coor_id',
        'leader_id',
        'vice_leader_id',
        'secretary_id',
        'vice_secretary_id',
        'treasurer_id',
        'vice_treasurer_id'
    ];

    public function coor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'coor_id');
    }

    public function leader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function vice_leader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vice_leader_id');
    }

    public function secretary(): BelongsTo
    {
        return $this->belongsTo(User::class, 'secretary_id');
    }

    public function vice_secretary(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vice_secretary_id');
    }

    public function treasurer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'treasurer_id');
    }

    public function vice_treasurer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vice_treasurer_id');
    }
}
