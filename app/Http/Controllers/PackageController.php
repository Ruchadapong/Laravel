<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class PackageController extends Controller
{

    public function addPackage(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $packIdCount = Package::where('pack_name', $data['pack_name'])->count();
            if ($packIdCount > 0) {
                return redirect()->back()->with('flash_message_error', 'Package Name already exists!');
            } else {
                $package = new Package;
                $package->pack_name = $data['pack_name'];
                $package->pack_time = $data['pack_time'];
                $package->pack_cost = $data['pack_cost'];
                if (!empty($data['pack_description'])) {
                    $package->pack_description = $data['pack_description'];
                } else {
                    $package->pack_description = '';
                }
                if ($request->hasFile('pack_image')) {
                    $image_tmp = Input::file('pack_image');
                    if ($image_tmp->isValid()) {
                        // Upload Images after Resize
                        $extension = $image_tmp->getClientOriginalExtension();
                        $fileName = rand(111, 99999) . '.' . $extension;
                        $large_image_path = 'project/backend/img/Package/large' . '/' . $fileName;
                        $medium_image_path = 'project/backend/img/Package/medium' . '/' . $fileName;
                        $small_image_path = 'project/backend/img/Package/small' . '/' . $fileName;
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                        $package->pack_image = $fileName;
                    }
                }
                $package->save();
                return redirect()->back()->with(
                    'flash_message_success',
                    'Package has been added successfully'
                );
            }
        }
        return view('backend.package.add-package');
    }

    public function deletePackage($id = null)
    {
        Package::where(['id' => $id])->delete();
        return redirect()->back()->with(
            'flash_message_success',
            'Package has been deleted successfully'
        );
    }

    public function editPackage(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            if ($request->hasFile('pack_image')) {
                $image_tmp = Input::file('pack_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'project/backend/img/Package/large' . '/' . $fileName;
                    $medium_image_path = 'project/backend/img/Package/medium' . '/' . $fileName;
                    $small_image_path = 'project/backend/img/Package/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                }
            } else {
                $fileName = $data['current_image'];
            }
            if (empty($data['pack_description'])) {
                $data['pack_description'] = '';
            }
            Package::where(['id' => $id])->update(['pack_name' => $data['pack_name'], 'pack_time' => $data['pack_time'], 'pack_cost' => $data['pack_cost'], 'pack_description' => $data['pack_description'], 'pack_image' => $fileName]);
            return redirect()->back()->with('flash_message_success', 'Package has been updated successfully');
        }
        $productDetails = Package::where(['id' => $id])->first();
        return view('backend.package.edit-package')->with(compact('productDetails'));
    }

    public function viewPackage(Request $request)
    {
        //show treatments on table
        $packages = Package::get();
        $packages = json_decode(json_encode($packages));
        // echo "<pre>";
        // print_r($treatment);die;

        return view('backend.package.view-package')->with(compact('packages'));
    }
}
