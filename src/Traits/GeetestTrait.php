<?php

namespace Zhaoweizhong\Geetest\Traits;

use Zhaoweizhong\Geetest\Facades\Geetest;

trait GeetestTrait
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function captcha()
    {
        $user_id = 'mengtu';
        $status = Geetest::preProcess(['user_id'=>$user_id]);
//         session()->put('gtserver',$status);
//         session()->put('user_id',$user_id);
        echo Geetest::getResponseStr();
    }
}
