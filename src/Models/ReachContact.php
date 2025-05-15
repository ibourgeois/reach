<?php

namespace iBourgeois\Reach\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReachContact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'reach_contacts';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'source',
        'status',
        'notes',
    ];

    protected $casts = [
        'notes' => 'array',
        'status' => 'enum:pending,subscribed,unsubscribed',
    ];
}
