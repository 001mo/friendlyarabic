<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Dashboard extends Controller{

    protected function withoutNulls(array $column){
        foreach($column as $i => $val){
            if($column[$i]){
                $data[$i] = $val;
            }
        }
        return $data;
    }

    public function index(Request $request){
        $valid = Validator::make($request->all(), [
            'country' => 'string|max:255',
            'graduated_from' => 'string|max:255',
            'graduation_year' => 'integer',
            'description' => 'string|max:5000',
            'personal_picture' => 'file',
            'introducer_video' => 'file'
        ]);

        if($valid->fails()){
            $errors = $valid->errors()->all();
            return count($errors) ==  1 ?
                response(['error' => $errors[0]]) :
                response(['error' => $errors]);
        }

        $pic = false;
        if($request['personal_picture']){
            $pic = $request->file('personal_picture')->store('public/usersPics');
            if (!$pic) {
                return response(['error' => 'something went wrong please try again'], 500);
            }
        }

        $vid = false;
        if($request['introducer_video']){
            $vid = $request->file('introducer_video')->store('public/teachersIntroVids');
            if(!$vid){
                return response(['error' => 'something went wrong please try again'], 500);
            }
        }

        $user = Auth::user();

        $user->teachInfo()->updateOrCreate(
            [
                'user_id' => $user->id
            ],
            $this->withoutNulls([
                'country' => $request['country'],
                'graduated_from' => $request['graduated_from'],
                'graduation_year' => $request['graduation_year'],
                'description' => $request['description']
            ])
        );

        if($pic){
            $user->usersPics()->create(['picture' => $pic]);
            $user['profile_pic'] = $pic;
            $user->save();
        }

        if($vid){
            $user->teachVids()->create(['video' => $vid]);
            $user->teachInfo()['intro_vid'] = $vid;
            $user->save();
        }

        return response(content:null, status:200);
    }
}
