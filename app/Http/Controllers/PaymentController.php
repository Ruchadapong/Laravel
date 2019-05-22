<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class PaymentController extends Controller
{
    public function addBooking(Request $request)
    {
        // $userDetails = User::with('booking')->where(['id' => $id])->first();
        // $userDetails = json_decode(json_encode($userDetails));
        // echo "<pre>";
        // print_r($userDetails);die;

        if ($request->isMethod('post')) {
            $data = $request->all();
            $RoomCount = Booking::where('room_id', $data['room_id'])->count();
            $EmployeeCount = Booking::where('emp_id', $data['emp_id'])->count();
            if ($RoomCount > 0 || $EmployeeCount > 0) {
                return redirect()->back()->with(
                    'flash_message_error',
                    'Room or Employee already exists!'
                );
            } else {
                $bookings = new Booking;
                $bookings->user_id = $data['user_id'];
                $bookings->booking_email = $data['booking_email'];
                $bookings->booking_name = $data['booking_name'];
                $bookings->booking_tel = $data['booking_tel'];
                $bookings->booking_time = $data['booking_time'];
                $bookings->room_id = $data['room_id'];
                $bookings->treat_id = $data['treat_id'];
                $bookings->package_id = $data['package_id'];
                $bookings->emp_id = $data['emp_id'];
                $bookings->status = $data['status'];
                $bookings->save();
                return redirect()->back()->with(
                    'flash_message_success',
                    'Booking has been added successfully'
                );
            }
        }
        return view('backend.booking.add-booking');
    }

    public function showBooking(Request $request)
    {
        //show treatments on table
        $bookings = Booking::get();
        $bookings = json_decode(json_encode($bookings));
        // echo "<pre>";
        // print_r($bookings);die;

        return view('backend.booking.show-booking')->with(compact('bookings'));
    }

    public function deleteBooking($id = null)
    {
        Booking::where(['id' => $id])->delete();
        return redirect()->back()->with(
            'flash_message_success',
            'Booking has been deleted successfully'
        );
    }

    public function editBooking(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            Booking::where(['id' => $id])->update([
                'user_id' => $data['user_id'],
                'booking_name' => $data['booking_name'],
                'booking_email' => $data['booking_email'],
                'booking_tel' => $data['booking_tel'],
                'booking_time' => $data['booking_time'],
                'room_id' => $data['room_id'],
                'treat_id' => $data['treat_id'],
                'package_id' => $data['package_id'],
                'emp_id' => $data['emp_id'],
                'status' => $data['status']
            ]);
            return redirect()->back()->with('flash_message_success', 'Booking has been updated successfully');
        }
        $bookingDetails = Booking::where(['id' => $id])->first();
        return view('backend.booking.edit-booking')->with(compact('bookingDetails'));
    }

    public function payment(Request $request)
    {
        $payments = Payment::get();
        if ($request->isMethod('post')) {
            $bookingID = $request->input('booking_id');
            if ($bookingID) {
                Booking::where(['id' => $bookingID])
                    ->update(['status' => "ยืนยันการโอน"]);
            };
            $paymentID = $request->input('id');
            if ($paymentID) {
                Payment::where(['id' => $paymentID])
                    ->update(['status' => "checked"]);
            };
            $data = $request->all();
            $email = $data['payment_email'];
            $messageData = [
                'email' => $data['payment_email'],
                'name' => $data['payment_name'],
                'bank' => $data['payment_bank'],
                'total' => $data['payment_total'],
                'booking_id' => $data['booking_id'],
            ];
            Mail::send(
                'backend.email.confirm',
                $messageData,
                function ($message) use ($email) {
                    $message->to($email)->subject('Verify transfer from Health Land Massage&Spa');
                }
            );
            return redirect()->back()->with(
                'flash_message_success',
                'Payment has been confirm successfully'
            );
        }
        return view('backend.booking.payment')->with(compact('payments'));
    }

    public function deletepayment($id = null)
    {
        Payment::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_success', 'Payment has been deleted successfully');
    }
}
