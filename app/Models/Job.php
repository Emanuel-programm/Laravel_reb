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
        'user_id',
        'title',
        'description',
        'salary',
        'tags',
        'job_type',
        'remote',
        'requirements',
        'benefits',
        'address',
        'city',
        'state',
        'zipcode',
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_logo',
        'company_website',
    ];

    // Relationship to User
    public function user():BelongsTo{
        return $this->belongsTo(User::class);

    }
}
