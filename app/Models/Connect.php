<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connect extends Model
{

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mentor_id', 'mentee_id', 'apprenticeship_id', 'connect_id_string', 'initial_start_month', 'initial_start_year', 'initial_end_month',
        'initial_end_year', 'apprentice_period', 'mentor_period', 'apprentice_service',  'status', 'rating', 'reason', 'mentor_comment', 'mentee_comment'
    ];

    public function mentor(){
        return $this->belongsTo(User::class, 'mentor_id');
    }

    public function mentee(){
        return $this->belongsTo(User::class, 'mentee_id');
    }


}
