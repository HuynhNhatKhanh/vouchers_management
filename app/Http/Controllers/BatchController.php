<?php
/**
 * Batch Controller
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
use App\Services\BatchService;

class BatchController extends Controller
{
    protected $batchService;

    public function __construct(BatchService $batchService)
    {
        $this->batchService = $batchService;
    }

    /**
     * @OA\Post(
     *     path="/api/batch/list",
     *     summary="List voucher by batch",
     *
     *     @OA\Response(response="201", description="Get voucher by batch successfully"),
     *     @OA\Response(response="422", description="Validation errors")
     * )
     */

    public function getVoucherByBatch(Request $request)
    {
        try {
            $data = $this->batchService->getVoucherByBatch($request);
            return response()->json([
                'data'    => $data,
                'message' => 'Get voucher successfully'
            ], 201);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(['message' => 'Get voucher by batch unsuccessfully'], 404);
        }
    }
}
