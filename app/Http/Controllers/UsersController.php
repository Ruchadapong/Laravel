<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class UsersController extends Controller
{
    public function addUser(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $userEmailCount = User::where('ac_email', $data['ac_email'])->count();
            if ($userEmailCount > 0) {
                return redirect()->back()->with('flash_message_error', 'E-mail already exists!');
            } else {
                $users = new User;
                $users->ac_fname = $data['ac_fname'];
                $users->ac_lname = $data['ac_lname'];
                $users->password = bcrypt($data['password']);
                if (!empty($data['ac_address'])) {
                    $users->ac_address = $data['ac_address'];
                } else {
                    $users->ac_address = '';
                }
                $users->ac_email = $data['ac_email'];
                $users->ac_birthday = $data['ac_birthday'];
                /*ถ้ามีเพิ่มข้อมูลแบบไฟล์*/
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
                        $users->ac_image = $fileName;
                    }
                }
                $users->role = $data['role'];
                $users->ac_sex = $data['ac_sex'];
                $users->ac_tel = $data['ac_tel'];
                $users->save();
                return redirect()->back()->with('flash_message_success', 'User has been added successfully');
            }
        }
        return view('backend.user.add-user');
    }

    public function deleteUser($id = null)
    {
        User::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_success', 'User has been deleted successfully');
    }

    public function editUser(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //upload image
            if ($request->hasFile('ac_image')) {
                $image_tmp = Input::file('ac_image');
                if ($image_tmp->isValid()) {
                    /*ถ้ามีเพิ่มข้อมูลแบบไฟล์ */
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
            }
            User::where(['id' => $id])->update(['ac_fname' => $data['ac_fname'], 'ac_lname' => $data['ac_lname'], 'ac_birthday' => $data['ac_birthday'], 'ac_tel' => $data['ac_tel'], 'ac_sex' => $data['ac_sex'], 'ac_address' => $data['ac_address'], 'role' => $data['role'], 'ac_image' => $fileName]);
            return redirect()->back()->with('flash_message_success', 'User has been updated successfully');
        }
        $userDetails = User::where(['id' => $id])->first();
        /*ค้นหาข้อมูลจาก id ในตาราง user */
        return view('backend.user.edit-user')->with(compact('userDetails'));
    }

    public function viewUser(Request $request)
    {
        //show user on table
        $users = User::get();
        $users = json_decode(json_encode($users));

        return view('backend.user.view-user')->with(compact('users'));
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) { /*ถ้ามีการส่งข้อมูลแบบ post */

            $data = $request->all();
            $usersCount = User::where('ac_email', $data['ac_email'])->count();
            if ($usersCount > 0) {
                /*ถ้ามีการกรองอีเมลซ้ำ ให้แจ้งเตือนเป็นข้อความ */
                return redirect()->back()->with('flash_message_error', 'Email already exists!');
            } else {
                $user = new User;
                $user->ac_fname = $data['ac_fname'];
                $user->ac_email = $data['ac_email'];
                $user->password = bcrypt($data['password']);
                $user->save();
                return redirect()->back()->with('flash_message_success', 'Register Success!');
                /*เพิ่มข้อมูลที่ได้รับมาลงในตาราง user พร้อมทั้งให้แจ้งเตือนเป็นข้อความ */
            }
        }
        return view('backend.register_page');
    }

    public function editprofile(Request $request)
    {
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
        return view('project.user-profile.editprofile')->with(compact('editDetails'));
    }

    public function showprofile()
    {
        //show data user
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        // echo "<pre>";
        // print_r($userDetails);die;

        return view('project.user-profile.showprofile')->with(compact('userDetails'));
    }
}
