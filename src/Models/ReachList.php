<?php

namespace iBourgeois\Reach\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReachList extends Model
{
    use SoftDeletes;

    protected $table = 'reach_lists';

    protected $fillable = [
        'name',
        'description',
        'owner_id',
    ];

    protected $casts = [
        'description' => 'string',
        'owner_id' => 'integer',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
