<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class TreatmentController extends Controller
{

    public function addTeatment(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //add treatments
            $treatIdCount = Treatment::where('treat_name', $data['treat_name'])->count();
            if ($treatIdCount > 0) {
                return redirect()->back()->with('flash_message_error', 'Treatmant Name already exists!');
            } else {
                $treatment = new Treatment;
                $treatment->treat_name = $data['treat_name'];
                $treatment->treat_time = $data['treat_time'];
                $treatment->treat_cost = $data['treat_cost'];
                if (!empty($data['treat_description'])) {
                    $treatment->treat_description = $data['treat_description'];
                } else {
                    $treatment->treat_description = '';
                }
                if ($request->hasFile('treat_image')) {
                    $image_tmp = Input::file('treat_image');
                    if ($image_tmp->isValid()) {
                        // Upload Images after Resize
                        $extension = $image_tmp->getClientOriginalExtension();
                        $fileName = rand(111, 99999) . '.' . $extension;
                        $large_image_path = 'project/backend/img/Treatment/large' . '/' . $fileName;
                        $medium_image_path = 'project/backend/img/Treatment/medium' . '/' . $fileName;
                        $small_image_path = 'project/backend/img/Treatment/small' . '/' . $fileName;
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                        $treatment->treat_image = $fileName;
                    }
                }
                $treatment->save();
                return redirect()->back()->with('flash_message_success', 'Treatment has been added successfully');
            }
        }
        return view('backend.treatment.addtreatment');
    }

    public function deleteTeatment($id = null)
    {
        Treatment::where(['id' => $id])->delete();
        return redirect()->back()->with(
            'flash_message_success',
            'Treatment has been deleted successfully'
        );
    }

    public function editTreatment(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //upload image
            if ($request->hasFile('treat_image')) {
                $image_tmp = Input::file('treat_image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'project/backend/img/Treatment/large' . '/' . $fileName;
                    $medium_image_path = 'project/backend/img/Treatment/medium' . '/' . $fileName;
                    $small_image_path = 'project/backend/img/Treatment/small' . '/' . $fileName;
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                }
            } else {
                $fileName = $data['current_image'];
            }
            if (empty($data['treat_description'])) {
                $data['treat_description'] = '';
            }
            Treatment::where(['id' => $id])->update(['treat_name' => $data['treat_name'], 'treat_time' => $data['treat_time'], 'treat_cost' => $data['treat_cost'], 'treat_description' => $data['treat_description'], 'treat_image' => $fileName]);
            return redirect()->back()->with(
                'flash_message_success',
                'Treatment has been updated successfully'
            );
        }
        $productDetails = Treatment::where(['id' => $id])->first();

        return view('backend.treatment.edittreatment')->with(compact('productDetails'));
    }

    public function viewTeatment(Request $request)
    {
        //show treatments on table
        $treatments = Treatment::get();
        $treatments = json_decode(json_encode($treatments));
        // echo "<pre>";
        // print_r($treatment);die;

        return view('backend.treatment.viewtreatment')->with(compact('treatments'));
    }
}
