<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignCertificate extends Model
{
    use HasFactory;
    protected $table = 'design_certificate';

    public function certicates()
    {
        return $this->hasMany(Certificate::class);
    }
}
