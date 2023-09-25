<?php

namespace App\Repositories;

use App\Models\Batch;

class BatchRepository
{
    protected $batch;

    public function __construct(Batch $batch)
    {
        $this->batch = $batch;
    }

    public function getVoucherByBatch($data = [], $options = [])
    {
        return $this->batch->where('id', $data['batch_id'])->with('vouchers')->get();
    }
}
