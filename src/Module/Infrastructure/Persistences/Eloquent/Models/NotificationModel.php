<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotificationModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    public $timestamps = false;

    protected $table = 'notifications';

    protected $casts = [
        'last_logged_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class);
    }
}
