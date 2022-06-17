<?php

namespace App\Http\Controllers;

use App\Http\Services\InventoryManagementService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InventoryManagementController extends Controller
{
    public function getInventory(Request $request, InventoryManagementService $inventoryManagementService): JsonResponse
    {
        $data = $inventoryManagementService->getInventory();
        return response()->json($data);
    }
}
