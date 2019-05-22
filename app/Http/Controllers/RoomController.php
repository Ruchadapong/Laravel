<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function addRoom(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $RoomStatusCount = Room::where(
                'status',
                $data['status']
            )->count();
            if ($RoomStatusCount > 99) {
                return redirect()->back()->with(
                    'flash_message_error',
                    'Status error!'
                );
            } else {
                $rooms = new Room;

                $rooms->room_time_start = $data['room_time_start'];
                $rooms->room_time_end = $data['room_time_end'];
                $rooms->status = $data['status'];
                $rooms->save();
                return redirect()->back()->with(
                    'flash_message_success',
                    'Room has been added successfully'
                );
            }
        }
        return view('backend.room.add_room');
    }

    public function deleteRoom($id = null)
    {
        Room::where(['id' => $id])->delete();
        return redirect()->back()->with(
            'flash_message_success',
            'Room has been deleted successfully'
        );
    }

    public function editRoom(Request $request, $id = null)
    {
        // echo "test";die;
        //edit treatments
        if ($request->isMethod('post')) {
            $data = $request->all();

            Room::where(['id' => $id])->update([
                'room_time_start' => $data['room_time_start'],
                'room_time_end' => $data['room_time_end'],
                'status' => $data['status']
            ]);
            return redirect()->back()->with(
                'flash_message_success',
                'Room has been updated successfully'
            );
        }
        $productDetails = Room::where(['id' => $id])->first();

        return view('backend.room.edit_room')->with(compact('productDetails'));
    }

    public function viewRoom(Request $request)
    {
        //show treatments on table
        $rooms = Room::get();
        $rooms = json_decode(json_encode($rooms));
        // echo "<pre>";
        // print_r($treatment);die;

        return view('backend.room.view_room')->with(compact('rooms'));
    }
}
