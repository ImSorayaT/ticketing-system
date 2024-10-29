<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

use App\Models\Tickets;
use App\Models\User;


class Messages extends Model
{
    use HasFactory;

    protected $table = 'tickets_messages';

    protected $fillable = [
        'threadId',
        'title',
        'from',
        'content',
    ];

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Tickets::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'from', 'id');
    }
}
