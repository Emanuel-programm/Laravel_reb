<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model

{
    use HasFactory;


    protected $table='job_listings';
     /**
     * The attributes that are mass assignable.
     *
    
   
     */
    //
    protected $fillable = [
            'title',
            'description',
            'location',
            'company_name',
            'salary',
            'job_type',
    ];

    // Relationship to User
    public function user():BelongsTo{
        return $this->belongsTo(User::class);

    }
}
