<?php

namespace App\Http\Controllers;
use App\Http\Requests\Staff\RentalDatailRequest;
use App\Models\RentalDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RentalDetailController extends Controller
{
    public function store(RentalDatailRequest $request){
        $data = $request->all();
        if(RentalDetail::create($data))
        {
            return response()->json([
                'status'    =>  true,
                'message'   =>  'Success create!'
            ]);
        } else {
            return response()->json([
                'status'    =>  false,
                'message'   =>  'Error'
            ]);$today  =   Carbon::today();

            $lastDay    = Carbon::now()->endOfMonth();

            while($today <= $lastDay) {
                RentalDetail::firstOrCreate(
                    [
                        'id_room'       =>  $request->id,
                        'date'          =>  $today,
                    ],
                    [
                        'id_room'   =>  $request->id,
                        'status'    =>  1,
                        'date'      =>  $today,
                        'note'      =>  $request -> note,
                    ]
                );
                $today->addDay();
            }

            return response()->json([
                'status'    =>  true,
                'message'   =>  'Crete success!',
            ]);
        }
    }
}
