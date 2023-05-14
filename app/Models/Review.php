<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function author()
    {
        if ($this->user_id) {
            return User::find($this->user_id);
        }

        return (object) ["name" => $this->name, "email" => $this->email];
    }

    public function date()
    {
        $dt = Carbon::parse($this->created_at);
        $date = mb_convert_case($dt->getTranslatedMonthName('MMMM'), MB_CASE_TITLE, "UTF-8") . ' ' . $dt->day;
        $weekDay = mb_convert_case($dt->dayName, MB_CASE_TITLE, "UTF-8");
        $year = $dt->year . ' ' . __('at') . ' ' .  $dt->format('h:i');
        return  implode(', ', [$weekDay, $date, $year]);
    }
}
