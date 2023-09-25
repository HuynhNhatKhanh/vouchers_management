<?php
/**
 * Voucher Controller
 *
 * PHP version 8
 *
 * @category  Controller
 * @package   App
 * @author    HuynhNhatKhanh <khanhhuynh28082000@gmail.com>
 * @copyright 2023 All Rights Reserved.
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      http://localhost/
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VoucherService;
use App\Http\Requests\CreateVoucherRequest;
use App\Http\Requests\UpdateVoucherRequest;

class VoucherController extends Controller
{
    protected $voucherService;

    public function __construct(VoucherService $voucherService)
    {
        $this->voucherService = $voucherService;
    }

    /**
     * @OA\Post(
     *     path="/api/vouchers",
     *     summary="Create a new voucher",
     *
     *     @OA\Response(response="201", description="Create voucher successfully"),
     *     @OA\Response(response="422", description="Validation errors")
     * )
     */
    public function create(CreateVoucherRequest $request)
    {
        try {
            $this->voucherService->create($request);
            return response()->json(['message' => 'Voucher create successfully'], 201);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['message' => 'Voucher create unsuccessfully'], 404);
        }
    }

    /**
     * @OA\Put(
     *     path="/api/vouchers/1",
     *     summary="Update voucher",
     *
     *     @OA\Response(response="201", description="Update voucher successfully"),
     *     @OA\Response(response="422", description="Validation errors")
     * )
     */
    public function update($id, UpdateVoucherRequest $request)
    {
        try {
            $this->voucherService->update($request, $id);
            return response()->json(['message' => 'Voucher update successfully'], 201);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['message' => 'Voucher update unsuccessfully'], 404);
        }
    }

}
