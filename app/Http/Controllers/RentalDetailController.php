<?php

namespace App\Http\Controllers;
use App\Http\Requests\Staff\RentalDatailRequest;
use App\Models\RentalDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RentalDetailController extends Controller
{
    public function store(RentalDatailRequest $request){
        $today  =   Carbon::today();

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
    public function edit(string $id)
    {
        $data = RentalDetail::find($id);
        return response()->json([$data]);
    }
    public function update(RentalDatailRequest $request){
        $data = $request->all();

        if(RentalDetail::find($request->id)->update($data))
        {
            return response()->json([
                'status'    =>  true,
                'message'   =>  'Update success!'
            ]);
        } else {
            return response()->json([
                'status'    =>  false,
                'message'   =>  'Error'
            ]);
        }
    }
    public function destroy($id)
    {
        if(RentalDetail::find($id)->delete())
        {
            return response()->json([
                'status'    =>  true,
                'message'   =>  'Delete success!'
            ]);
        } else {
            return response()->json([
                'status'    =>  false,
                'message'   =>  'Error'
            ]);
        }
    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json(
            [
                'message'=>'success'
            ],
            200
        );
    }
}
