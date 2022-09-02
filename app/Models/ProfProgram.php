<?php

namespace App\Models;

use App\Models\Traits\UUIDGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfProgram extends Model
{
    use HasFactory, UUIDGenerator, SoftDeletes;

    const TYPE_RESOURCE = 'profProgram';
}
