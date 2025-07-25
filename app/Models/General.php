<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $fillable = ['smtp', 'emailsend', 'contrasend', 'address', 'inside', 'district', 'city', 'country', 'cellphone','office_phone', 'email', 'facebook', 'instagram','youtube','linkedin', 'twitter', 'tiktok', 'whatsapp','whatsapp2', 'support_one', 'support_two',  'form_email', 'business_hours', 'schedule', 'mensaje_whatsapp', 'aboutus', 'mapa'];


    public function categoria()
    {
        return $this->belongsTo(Category::class);
    }
}
