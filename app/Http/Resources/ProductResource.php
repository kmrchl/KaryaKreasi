<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'produk' => $this->produk,
            'deskripsi' => $this->deskripsi,
            'harga' => (float) $this->harga,
            'gambar' => $this->gambar,
            'gambar_url' => $this->gambar_url, // dari accessor
            'created_at' => $this->created_at,
        ];
    }
}
