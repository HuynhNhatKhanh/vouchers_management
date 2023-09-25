<?php
/**
 * VoucherUser Controller
 *
 * PHP version 8
 *
 * @category  Controllers
 * @package   App
 * @author    HuynhNhatKhanh <khanhhuynh28082000@gmail.com>
 * @copyright 2023 All Rights Reserved.
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      http://localhost/
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VoucherUserService;
use App\Http\Requests\UseVoucherRequest;

class VoucherUserController extends Controller
{
    protected $voucherUserService;

    public function __construct(VoucherUserService $voucherUserService)
    {
        $this->voucherUserService = $voucherUserService;
    }

    /**
     * @OA\Post(
     *     path="/api/useVoucher",
     *     summary="Use voucher",
     *
     *     @OA\Response(response="201", description="Use voucher successfully"),
     *     @OA\Response(response="422", description="Validation errors")
     * )
     */

    public function useVoucher(UseVoucherRequest $request)
    {
        try {
            $data = $this->voucherUserService->useVoucher($request);
            return response()->json([
                'data'    => $data,
                'message' => 'Get voucher successfully'
            ], 201);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['message' => 'Get voucher unsuccessfully'], 404);
        }
    }
}
