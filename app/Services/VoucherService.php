<?php

namespace App\Services;

use App\Repositories\VoucherRepository;
use Illuminate\Http\Request;

class VoucherService
{
    /**
     * construct
     *
     * @param $voucherRepository
     */
    public function __construct(VoucherRepository $voucherRepository)
    {
        $this->voucherRepository = $voucherRepository;
    }

    /**
     * Create voucher
     *
     * @param $request
     *
     * @return mixed
     */
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

    /**
     * Update voucher
     *
     * @param $request
     *
     * @return mixed
     */
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
}
