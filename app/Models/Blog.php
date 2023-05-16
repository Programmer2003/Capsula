<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $withCount = ['comments'];

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function month()
    {
        $dt = Carbon::parse($this->created_at);
        $month = $dt->translatedFormat('F');
        return mb_strlen($month) > 4 ? mb_substr($month, 0, 3) : $month;
    }

    public function day()
    {
        return $this->created_at->day;
    }

    public function date()
    {
        $dt = Carbon::parse($this->created_at);
        return $dt->translatedFormat('j F Y');
    }
}
