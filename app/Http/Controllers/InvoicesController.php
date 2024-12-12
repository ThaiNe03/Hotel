<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $data = Invoices::all();
        return response()->json([
            'invoices'  =>  $data
        ]);
    }
    public function change(Request $request)
    {
        $invoices = Invoices::find($request->id);
        if($invoices) {
            if($invoices->status == 1) {
                $invoices->status = 1;
            } else {
                $invoices->status = 0;
            }
            $invoices->save();

            return response()->json([
                'status' => true,
                'message' => "Đã  đổi trạng thái thanh toán!"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Lỗi xảy ra!"
            ]);
        }
    }
}
