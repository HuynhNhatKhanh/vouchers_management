<?php

namespace App\Services;

use App\Repositories\VoucherUserRepository;
use App\Repositories\VoucherRepository;
use Illuminate\Http\Request;

class VoucherUserService
{
    /**
     * construct
     *
     * @param $voucherUserRepository, $voucherRepository
     */
    public function __construct(VoucherUserRepository $voucherUserRepository, VoucherRepository $voucherRepository)
    {
        $this->voucherUserRepository = $voucherUserRepository;
        $this->voucherRepository = $voucherRepository;
    }

    /**
     * use voucher
     *
     * @param $request
     *
     * @return mixed
     */
    public function useVoucher(Request $request)
    {
        $id = $this->voucherRepository->getIdbyCode($request->code);
        $dataFilter = [
            'fullname'   => $request->fullname,
            'email'      => $request->email,
            'voucher_id' => $id,
            'used_at'    => date("Y-m-d h:i:s")
        ];
        return $this->voucherUserRepository->useVoucher($dataFilter);
    }
}
