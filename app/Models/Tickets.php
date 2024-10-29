<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use App\Models\Messages;
use App\Models\User;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'priority',
        'requester',
        'assignee',
        'request_content',
        'threadId',
        'updated_at'
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Messages::class, 'threadId');
    }

    public function getRequester(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'requester', 'id');

    }

    public function getAssignee(): BelongsTo
    {
        return $this->BelongsTo(User::class);

    }

}
