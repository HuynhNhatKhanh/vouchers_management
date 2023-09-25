<?php

namespace App\Services;

use App\Repositories\BatchRepository;
use Illuminate\Http\Request;

class BatchService
{
    public function __construct(BatchRepository $batchRepository)
    {
        $this->batchRepository = $batchRepository;
    }


    public function getVoucherByBatch(Request $request)
    {
        $dataFilter = [
            'batch_id'    => $request->batch_id,
        ];
        return $this->batchRepository->getVoucherByBatch($dataFilter);
    }
}
