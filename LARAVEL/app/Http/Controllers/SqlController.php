<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Http\Requests\CreateBusiness;
use App\Http\Requests\BusinessIdentificationLinks;
use App\Http\Resources\BusinessResource;

class SqlController extends Controller
{
    public function deleteUsers(){
        $sql = User::where('name','!=', "")->delete();
        if($sql){
            echo "Success: All users has been deleted!";
        }
    }
    public function updateLightMode($userID, $mode){
        User::where('id', $userID)->update(['lightMode' => $mode]);
    }
    public function submitBusMainImg(Request $request){
        $file = $request->file('mainImage');
        $filename = time().'_'.$file->getClientOriginalName();
        if(str_contains($filename, '\'') == true || str_contains($filename, '"') == true || str_contains($filename, '(') == true || str_contains($filename, ')') == true || str_contains($filename, '{') == true || str_contains($filename, '}') == true){
            return back()->with("message","ERROR (71373141): Please rename your file and avoid using one of these Characters - <span style='font-size:25px;'>', \", ), (, }, {</span>. Thank you.");
        }
        $location = 'useFile'; // path
        $resultMoveFIle = $file->move($location,$filename);
        $page = Business::find($request->id);
        $page->idImageName = $filename;
        $page->idImagePath = $location;
        $page->save();
        if (!$page) {
            return response()->json([
                'message' => 'Unable to process your request this time.'
            ], 401);
        }
        return response()->json(['success' => true, 'business' => new BusinessResource($page)]);
    }
    public function submitIdentificationsL(BusinessIdentificationLinks $request){
        $data = $request->validated();
        $page = Business::find($data['id']);
        $page->validIDname = $data['validIDname'];
        $page->idNumber = $data['idNumber'];
        $page->idDateExpiry = $data['idDateExpiry'];
        $page->businessEmail = $data['businessEmail'];
        $page->businessFBLink = $data['businessFBLink'];
        $page->save();
        if (!$page) {
            return response()->json([
                'message' => 'Unable to process your request this time.'
            ], 401);
        }
        return response()->json(['success' => true, 'business' => new BusinessResource($page)]);
    }
    public function submitBusinessBasic(CreateBusiness $request){
        $data = $request->validated();
        $business = Business::create([
            'businessOwnerID' => $data['id'],
            'businessName' => $data['businessName'],
            'businessBackground' => $data['businessBackground'],
            'businessAddress' => $data['businessAddress'],
            'businessContactNo1' => $data['businessContactNo1'],
            'businessContactNo2' => $data['businessContactNo2'],
        ]);
        if (!$business) {
            return response()->json([
                'message' => 'Unable to process your request this time.'
            ], 401);
        }
        return response()->json(['success' => true, 'business' => new BusinessResource($business)]);
        //return response(compact('user'));
    }
}
