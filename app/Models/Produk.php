<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $timestamps = true;

    protected $fillable = [
        'id_kategori',
        'produk',
        'deskripsi',
        'harga',
        'gambar',
    ];

    // Accessor biar langsung dapet URL gambar
    protected $appends = ['gambar_url'];

    public function getGambarUrlAttribute()
    {
        if (!$this->gambar) {
            return null;
        }
        return Storage::url($this->gambar);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
