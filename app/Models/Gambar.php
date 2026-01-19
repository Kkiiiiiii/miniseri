<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
   protected $fillable  = ['image','judul', 'episode', 'rilis','genre'];
   protected $table = 'gambar';
}
