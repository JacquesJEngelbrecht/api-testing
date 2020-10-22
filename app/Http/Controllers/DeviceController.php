<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    //Get
    //With or without parameter
    function list($id=null) {
        return $id?Device::find($id):Device::all();
    }

    //Post
    function add(Request $request) {
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();
        if($result) {
            return ["Result"=>"Data saved"];
        } else {
            return ["Result"=>"Failed to save data"];
        }
    }

    //Put
    function update(Request $request) {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $result = $device->save();
        if($result) {
            return ["result"=>"Data is updated with PUT"];
        } else {
            return ["result"=>"Data NOT updated"];
        }
        
    }

    //Search
    function search($name) {
        return Device::where('name','like', '%'.$name.'%')->get();
    }

    //Delete
    function delete($id) {
        $device = Device::find($id);
        $result = $device->delete();
        if($result) {
            return ["result"=>"Deleted"];
        }else {
            return ["result"=>"Delete failed"];
        }
    }

    //Validator function
    function testValidation(Request $request) {
        $rules = [
            "member_id"=>"required|min:2|max:4"
        ];
        $vaidator = Validator::make($request->all(), $rules);
        if($vaidator->fails()) {
            return response()->json($vaidator->errors(),401);
        } else {
            $device = new Device;
            $device->name = $request->name;
            $device->member_id = $request->member_id;
            $result = $device->save();
            if($result) {
                return ["Result"=>"Data saved"];
            }else {
                return ["Result"=>"Save failed"];
            }
        }
    }

    
}
