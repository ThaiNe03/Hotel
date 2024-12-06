<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalRoom extends Model
{
    use HasFactory;
    protected $table='rooms';
    protected $fillable = [
        'room_name',
        'price',
        'status',
        'id_room_categories',
        'more_service',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

}
