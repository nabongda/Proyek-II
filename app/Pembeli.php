<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use Notifiable;

    protected $table='pembeli';

    protected $primaryKey='id_pembeli';

    protected $fillable = [
        'username', 'email', 'password', 'nama_pembeli', 'no_hp', 'alamat',
    ];
}
