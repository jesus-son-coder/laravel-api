<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @OA\Schema(
 *      title="Task",
 *      description="L'objet Task",
 *      @OA\Xml(name="Task"),
 * ),
 */
class Task extends Model
{
    use HasFactory;

    // protected $guarded = ['user_id'];
    protected $fillable = ['title', 'description', 'due'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
