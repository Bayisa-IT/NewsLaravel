<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

use DB;
use Session;

class crudController extends Controller
{
    public function insertData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('y-m-d:H:I:s');

         if($request->has('social')){
         $data['social'] = implode(',', $data['social']);
         }

         if($request->hasFile('image')){
           $data['image'] = $this->uploadimage($tbl, $data['image']);
          
            }

            if($request->has('category_id')){
                $data['category_id'] = implode(',', $data['category_id']);
               
                 }

        Db::table($tbl)->insert($data);
        $request->session()->flash('message', 'data inserted successfully');
       return redirect()->back();
    }


    public function updateData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('y-m-d:H:I:s');

        if($request->has('social')){
            $data['social'] = implode(',', $data['social']);
            }
   
            if($request->hasFile('image')){
              $data['image'] = $this->uploadimage($tbl, $data['image']);
             
               }
        
               if($request->has('category_id')){
                $data['category_id'] = implode(',', $data['category_id']);
               
                 }
        Db::table($tbl)->where(key($data),reset($data))->update($data);
        $request->session()->flash('message', 'data updated successfully');
       return redirect()->back();
    }

    public function uploadimage($location,$imagename){
        $name = $imagename->getClientOriginalName();
        $imagename->move(public_path().'/'.$location,date('ymdgis').$name);
       return date('ymdgis').$name;
    }


}
