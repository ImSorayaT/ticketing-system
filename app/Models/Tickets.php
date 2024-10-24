<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Messages;

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
        return $this->hasMany(Messages::class);
    }

}
