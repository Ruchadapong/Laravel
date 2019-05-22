<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('post')) { /*ถ้ามีการส่งข้อมูลแบบ post */
            $data = $request->input();
            if (Auth::attempt(['ac_email' => $data['ac_email'], 'password' => $data['password'], 'role' => 'admin'])) {

                return redirect('/show-booking');
                /*ถ้า email, password และ role ตรงกับฐานข้อมูลให้ส่ง /show-booking ไปที่ url*/
            } else if (Auth::attempt(['ac_email' => $data['ac_email'], 'password' => $data['password'], 'role' => 'emp'])) {

                return redirect('/role_employee');
            } else if (Auth::attempt([
                'ac_email' => $data['ac_email'], 'password' => $data['password'], 'role' => 'user'
            ])) {

                return redirect('/home');
            } else {
                return redirect()->back()->with('flash_message_error', 'Invalid Email or Password!!');
                /*ถ้าไม่ตรงกับเงื่อนไขใดเลย ให้แจ้งเตือนเป็นข้อความ */
            }
        }

        return view('backend.login_page');
    }

    public function dashboard()
    {
        return view('backend.booking.show-booking');
    }

    public function page()
    {
        return view('project.home');
    }
}
