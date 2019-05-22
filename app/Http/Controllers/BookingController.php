<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Employee;
use App\Package;
use App\Payment;
use App\Room;
use App\Treatment;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class BookingController extends Controller
{
    public function addBooking(Request $request)
    {
        $id = Auth::user()->id;
        $userDetails = User::find($id);
        $roomDetails = Room::get();
        $empDetails = Employee::get();
        $treatDetails = Treatment::get();
        $packageDetails = Package::get();

        if ($request->isMethod('post')) {
            $room = $request->input('room_id');
            if ($room) {
                Room::where(['id' => $room])->update(['status' => 0]);
            };
            $emp = $request->input('emp_id');
            if ($emp) {
                Employee::where(['id' => $emp])->update(['emp_status' => 0]);
            };
            $data = $request->all();
            $booking = new Booking;
            $booking->user_id = $data['user_id'];
            $booking->booking_email = $data['booking_email'];
            $booking->booking_name = $data['booking_name'];
            $booking->booking_tel = $data['booking_tel'];
            $booking->booking_time = $data['booking_time'];
            $booking->room_id = $data['room_id'];
            $booking->treat_id = $data['treat_id'];
            $booking->package_id = $data['package_id'];
            $booking->emp_id = $data['emp_id'];
            $booking->status = $data['status'];
            $booking->save();
            return redirect()->back()->with('flash_message_success', 'จองบริการสำเร็จแล้ว กรุณาชำระบริการภายใน 24 ชม.');
        }
        return view('project.booking.booking')->with(compact('userDetails', 'treatDetails', 'packageDetails', 'roomDetails', 'empDetails', 'bookingDetails'));
    }

    public function showBooking()
    {
        $id = Auth::user()->id;

        $bookingDetails = User::with('booking')->where(['id' => $id])->first();
        $bookingDetails = json_decode(json_encode($bookingDetails));

        $Details_1 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '1')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();

        $Details_2 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '2')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        $Details_3 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '3')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        $Details_4 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '4')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        $Details_5 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '5')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        $Details_6 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '6')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        $Details_7 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '7')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        $Details_8 = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', '8')
            ->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();

        // $Details_1 = json_decode(json_encode($Details_1));
        // echo "<pre>";
        // print_r($Details_1);die;

        return view('project.booking.show-booking')->with(compact('Details_1', 'bookingDetails', 'Details_2', 'Details_3', 'Details_4', 'Details_5', 'Details_6', 'Details_7', 'Details_8'));
    }

    public function payment($id = null, Request $request)
    {
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $booking_id = $id;
        $payBookings = DB::table('bookings')
            ->join('treatments', 'treatments.id', '=', 'bookings.treat_id')
            ->join('packages', 'packages.id', '=', 'bookings.package_id')
            ->join('employees', 'employees.id', '=', 'bookings.emp_id')
            ->where('bookings.id', '=', $id)->select('bookings.*', 'treatments.*', 'employees.*', 'packages.*')->get();
        if ($request->isMethod('post')) {
            $slip = $request->input('booking_id');
            if ($slip) {
                Booking::where(['id' => $slip])->update(['status' => "ตรวจสอบหลักฐานการโอน"]);
            };
            $data = $request->all();
            $payments = new Payment;
            $payments->booking_id = $data['booking_id'];
            $payments->payment_name = $data['payment_name'];
            $payments->payment_email = $data['payment_email'];
            $payments->payment_bank = $data['payment_bank'];
            $payments->payment_total = $data['payment_total'];
            $payments->status = $data['status'];
            if ($request->hasFile('payment_slip')) {
                $image_tmp = Input::file('payment_slip');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'project/backend/img/Payment/large' . '/' . $fileName;
                    $medium_image_path = 'project/backend/img/Payment/medium' . '/' . $fileName;
                    $small_image_path = 'project/backend/img/Payment/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                    $payments->payment_slip = $fileName;
                }
            } else {
                $fileName = $data['current_image'];
            }
            $payments->save();
            return redirect()->back()->with('flash_message_success', 'ระบบได้ทำการส่งหลักฐานไปยังผู้ดูแลแล้ว กรุณารอการยืนยันทางอีเมลภายใน 24 ชม.');
        }
        return view('project.booking.payment')->with(compact('payBookings', 'userDetails', 'booking_id'));
    }
}
