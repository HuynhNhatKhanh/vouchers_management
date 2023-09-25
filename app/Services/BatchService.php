<?php

namespace App\Services;

use App\Repositories\BatchRepository;
use Illuminate\Http\Request;

class BatchService
{
    /**
     * construct
     *
     * @param $batchRepository
     */
    public function __construct(BatchRepository $batchRepository)
    {
        $this->batchRepository = $batchRepository;
    }

    /**
     * Get voucher by btach
     *
     * @param $request
     *
     * @return mixed
     */
    public function getVoucherByBatch(Request $request)
    {
        $dataFilter = [
            'batch_id'    => $request->batch_id,
        ];
        return $this->batchRepository->getVoucherByBatch($dataFilter);
    }
}
