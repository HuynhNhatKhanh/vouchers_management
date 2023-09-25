<?php

namespace App\Services;

use App\Repositories\VoucherRepository;
use Illuminate\Http\Request;

class VoucherService
{
    public function __construct(VoucherRepository $voucherRepository)
    {
        $this->voucherRepository = $voucherRepository;
    }

    public function create(Request $request)
    {
        $dataCreate = [
            'code'        => $request->code,
            'type'        => $request->type,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'status'      => $request->status,
            'description' => $request->description,
            'batch_id'    => $request->batch_id,
        ];
        return $this->voucherRepository->create($dataCreate);
    }

    public function update(Request $request, $id)
    {
        $dataUpdate = [
            'code'        => $request->code,
            'type'        => $request->type,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'status'      => $request->status,
            'description' => $request->description,
            'batch_id'    => $request->batch_id,
        ];
        return $this->voucherRepository->update($dataUpdate, $id);
    }

    public function getVoucherByBatch(Request $request)
    {
        $dataFilter = [
            'batch_id'    => $request->batch_id,
        ];
        return $this->voucherRepository->getVoucherByBatch($dataFilter);
    }
}
