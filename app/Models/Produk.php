<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'produk', 'deskripsi', 'harga', 'gambar'
    ];

    // Optional: accessor supaya front-end dapat image_url langsung
    protected $appends = ['gambar_url'];

    public function getImageUrlAttribute()
    {
        if (!$this->gambar) return null;

        // kalau gambar sudah berupa URL (http...), kembalikan apa adanya
        if (filter_var($this->gambar, FILTER_VALIDATE_URL)) {
            return $this->gambar;
        }

        // kalau path dari storage (public disk)
        return asset('storage/' . $this->gambar);
    }
}
