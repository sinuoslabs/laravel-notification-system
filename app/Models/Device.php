<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
