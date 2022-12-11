<?php

declare(strict_types=1);

namespace Infrastructure\Repository\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;
}
