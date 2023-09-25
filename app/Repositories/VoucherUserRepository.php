<?php

namespace App\Repositories;

use App\Models\VoucherUser;

class VoucherUserRepository
{
    protected $voucherUser;

    /**
     * construct
     *
     * @param $voucherUser
     */
    public function __construct(VoucherUser $voucherUser)
    {
        $this->voucherUser = $voucherUser;
    }

    /**
     * Use voucher
     *
     * @param $data
     *
     * @return mixed
     */
    public function useVoucher($data = [], $options = [])
    {
        return $this->voucherUser->create($data);
    }
}
