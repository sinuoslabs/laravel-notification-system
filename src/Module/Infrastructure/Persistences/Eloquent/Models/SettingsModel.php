<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingsModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'settings';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'channel',
        'opt-in'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class);
    }
}
