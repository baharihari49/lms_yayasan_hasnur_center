<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\kursus;

class materi extends Model
{
    use HasFactory;
    protected $table = 'materis';

    protected $fillable = [
        'judul',
        'deskripsi',
        'link_materi',
        'user_id',
        'kursus_id'
    ];

    public function kursus(): BelongsTo
{
    return $this->belongsTo(kursus::class);
}


}
