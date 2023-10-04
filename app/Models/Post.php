<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

//    * @param int $userId
//    * @return bool

    public function isLikedBy($userId)
    {
        return Like::where('post_id', $this->id)
            ->where('user_id', $userId)
            ->exists();
    }
}
