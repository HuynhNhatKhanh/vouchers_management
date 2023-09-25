<?php

namespace App\Repositories;

use App\Models\VoucherUser;

class VoucherUserRepository
{
    protected $voucherUser;

    public function __construct(VoucherUser $voucherUser)
    {
        $this->voucherUser = $voucherUser;
    }

    public function useVoucher($data = [], $options = [])
    {
        return $this->voucherUser->create($data);
    }
}
