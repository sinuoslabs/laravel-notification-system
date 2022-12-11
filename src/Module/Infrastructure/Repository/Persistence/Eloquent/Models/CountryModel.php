<?php

declare(strict_types=1);

namespace Infrastructure\Repository\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;

    public $timestamps = false;
}
