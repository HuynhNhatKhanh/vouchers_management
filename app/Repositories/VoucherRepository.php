<?php

namespace App\Repositories;

use App\Models\Voucher;

class VoucherRepository
{

    protected $voucher;

    public function __construct(Voucher $voucher)
    {
        $this->voucher = $voucher;
    }

    public function create($data = [], $options = [])
    {
        return $this->voucher->create($data);
    }

    public function update($data = [], $options = [])
    {
        return $this->voucher
                ->where('id', $options)
                ->update($data);
    }

    public function getVoucherByBatch($data = [], $options = [])
    {
        return $this->voucher->where('batch_id', $data['batch_id'])->get();
    }

    public function getIdbyCode($code, $options = [])
    {
        return $this->voucher->where('code', $code)->first()->id;
    }

}
