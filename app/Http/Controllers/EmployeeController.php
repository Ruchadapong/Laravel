<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Employee;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $employee = new Employee;
            $employee->emp_name = $data['emp_name'];
            if (!empty($data['emp_description'])) {
                $employee->emp_description = $data['emp_description'];
            } else {
                $employee->emp_description = '';
            }
            $employee->emp_time_start = $data['emp_time_start'];
            $employee->emp_time_end = $data['emp_time_end'];
            //upload image
            if ($request->hasFile('emp_image')) {
                $image_tmp = Input::file('emp_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'project/backend/img/Employee/large' . '/' . $fileName;
                    $medium_image_path = 'project/backend/img/Employee/medium' . '/' . $fileName;
                    $small_image_path = 'project/backend/img/Employee/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                    $employee->emp_image = $fileName;
                }
                $employee->emp_email = $data['emp_email'];
                $employee->emp_facebook = $data['emp_facebook'];
                $employee->emp_line = $data['emp_line'];
                $employee->emp_tel = $data['emp_tel'];
                $employee->save();
                return redirect()->back()->with(
                    'flash_message_success',
                    'Employee has been added successfully'
                );
            }
        }
        return view('backend.employee.add-employee');
    }

    public function deleteEmployee($id = null)
    {
        Employee::where(['id' => $id])->delete();
        return redirect()->back()->with(
            'flash_message_success',
            'Employee has been deleted successfully'
        );
    }

    public function editEmployee(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasFile('emp_image')) {
                $image_tmp = Input::file('emp_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'project/backend/img/Employee/large' . '/' . $fileName;
                    $medium_image_path = 'project/backend/img/Employee/medium' . '/' . $fileName;
                    $small_image_path = 'project/backend/img/Employee/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                }
            } else {
                $fileName = $data['current_image'];
            }
            if (empty($data['emp_description'])) {
                $data['emp_description'] = '';
            }
            Employee::where(['id' => $id])->update(['emp_name' => $data['emp_name'], 'emp_time_start' => $data['emp_time_start'], 'emp_time_end' => $data['emp_time_end'], 'emp_email' => $data['emp_email'], 'emp_facebook' => $data['emp_facebook'], 'emp_line' => $data['emp_line'], 'emp_tel' => $data['emp_tel'], 'emp_description' => $data['emp_description'], 'emp_image' => $fileName]);
            return redirect()->back()->with('flash_message_success', 'Employee has been updated successfully');
        }
        $productDetails = Employee::where(['id' => $id])->first();

        return view('backend.employee.edit-employee')->with(compact('productDetails'));
    }

    public function viewEmployee(Request $request)
    {
        //show employee on table
        $employees = Employee::get();
        $employees = json_decode(json_encode($employees));
        // echo "<pre>";
        // print_r($treatment);die;

        return view('backend.employee.view-employee')->with(compact('employees'));
    }

    public function editEmpProfile(Request $request)
    {
        //edit user profile
        $user_id = Auth::user()->id;
        $editDetails = User::find($user_id);
        if ($request->isMethod('post')) {
            $data = $request->all();
            $user = User::find($user_id);
            if ($request->hasFile('ac_image')) {
                $image_tmp = Input::file('ac_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'project/backend/img/User/large' . '/' . $fileName;
                    $medium_image_path = 'project/backend/img/User/medium' . '/' . $fileName;
                    $small_image_path = 'project/backend/img/User/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                }
            } else {
                $fileName = $data['current_image'];
            }
            if (empty($data['ac_address'])) {
                $data['ac_address'] = '';
            } else {
                $user->ac_address = $data['ac_address'];
            }
            $user->ac_fname = $data['ac_fname'];
            $user->ac_lname = $data['ac_lname'];
            $user->ac_image = $fileName;
            $user->ac_birthday = $data['ac_birthday'];
            $user->ac_sex = $data['ac_sex'];
            $user->ac_tel = $data['ac_tel'];
            $user->save();
            return redirect()->back()->with('flash_message_success', 'Update Successfully!');
        }
        return view('backend.employee.edit-profile')->with(compact('editDetails'));
    }

    public function showEmpProfile()
    {
        //edit data user
        $emp_id = Auth::user()->id;
        $empDetails = User::find($emp_id);
        // echo "<pre>";
        // print_r($empDetails);die;

        return view('backend.employee.show-profile')
            ->with(compact('empDetails'));
    }

    public function showBooking()
    {
        //edit data user

        $showBookings = Booking::get();
        // $showBookings = json_decode(json_encode($showBooking));

        // echo "<pre>";
        // print_r($showBooking);die;

        return view('backend.employee.show-booking-emp')->with(compact('showBookings'));
    }
}
