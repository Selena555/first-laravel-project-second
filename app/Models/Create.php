<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property string $name
 * @property string $poster
 * @property string $created_at
 * @property string $updated_at
 */

class Create extends Model
{
    use HasFactory;
}
