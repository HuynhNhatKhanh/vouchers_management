<?php

namespace App\Repositories;

use App\Models\Voucher;

class VoucherRepository
{

    protected $voucher;

    /**
     * construct
     *
     * @param $voucher
     */
    public function __construct(Voucher $voucher)
    {
        $this->voucher = $voucher;
    }

    /**
     * Create voucher
     *
     * @param $data
     *
     * @return mixed
     */
    public function create($data = [], $options = [])
    {
        return $this->voucher->create($data);
    }

    /**
     * Update voucher
     *
     * @param $data
     *
     * @return mixed
     */
    public function update($data = [], $options = [])
    {
        return $this->voucher
                ->where('id', $options)
                ->update($data);
    }

    /**
     * Get id by code
     *
     * @param $data
     *
     * @return mixed
     */
    public function getIdbyCode($code, $options = [])
    {
        return $this->voucher->where('code', $code)->first()->id;
    }

}
