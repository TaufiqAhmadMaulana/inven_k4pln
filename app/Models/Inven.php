<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inven extends Model
{
    use HasFactory;
    protected $table ='invens';
    protected $fillable = [
        'kode',
        'kategori',
        'nama',
        'gambar',
        'lokasi',
    ];

    public function getCategoryLabelAttribute(){
        $categoryLabels = [
            'APAR' => 'APAR',
            'APD' => 'APD',
            'DIESEL' => 'DIESEL',
        ];
        return $categoryLabels[$this->category] ?? $this->category;
    }
}
