<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id_produk,            // gunakan id_produk
            'id_produk' => $this->id_produk,
            'kategori' => [
                'id_kategori' => $this->kategori->id_kategori,
                'kategori' => $this->kategori->kategori
            ],
            'produk' => $this->produk,
            'deskripsi' => $this->deskripsi,
            'harga' => (float) $this->harga,
            'gambar' => $this->gambar,           // path di storage (nullable)
            'gambar_url' => $this->gambar_url,   // accessor -> full url
            'created_at' => $this->created_at,
            
        ];
    }
}
