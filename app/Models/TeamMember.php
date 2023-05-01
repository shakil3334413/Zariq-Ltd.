<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMember extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supportTeam(): BelongsTo
    {
        return $this->belongsTo(SupportTeam::class,'support_team_id');
    }
}
