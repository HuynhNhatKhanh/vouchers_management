<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'type',
        'description',
        'status',
        'start_date',
        'end_date',
        'batch_id',
    ];

    public function batchs()
    {
        return $this->belongsTo(Batch::class);
    }

    public function voucher_user()
    {
        return $this->hasMany(VoucherUser::class);
    }
}
