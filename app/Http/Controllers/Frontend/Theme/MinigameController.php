<?php

namespace App\Http\Controllers\Frontend\Theme;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Cache;
use Session;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class MinigameController extends Controller
{
    public function getIndex(Request $request){
        try{
            $method = "GET";
            $data = array();
            $data['token'] = Session::get('jwt');
            $data['secret_key'] = config('api.secret_key');
            $data['domain'] = \Request::server("HTTP_HOST");

            // $group_api = Cache::get('minigame_list');
            // if(!isset($group_api)){
                $url = '/minigame/get-list-minigame';
                $group_api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($group_api) && $group_api->httpcode == 200 ) {
                    $group_api = $group_api->data->data;
                }
            //     try{
            //         Cache::put('minigame_list', $group_api, now()->addMinutes(5));
            //     }catch(Exception $e){
            //         logger($e);
            //     }
            // }
            $groups = array_filter($group_api, function ($value) use ($request){
                return $value->slug== $request->slug;
            });
            $groups_other = array_filter($group_api, function ($value) use ($request){
                return $value->slug != $request->slug;
            });
            $group=null;
            foreach ($groups as $dataar) {
                $group = $dataar;
            }
            $url = '/minigame/get-minigame-info';
            $data['id'] = $group->id;
            $data['module'] = explode('-', $group->module)[0];
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                $result_out = $result_Api->data;
                if ($result_out->status == 1) {
                    $result = $result_Api->data->data;
                    switch ($data['module']) {
                        case 'rubywheel':
                            return view('frontend.pages.minigame.rubywheel', compact('result','groups_other'));
                        case 'flip':
                            return view('frontend.pages.minigame.flip', compact('result','groups_other'));
                        case 'slotmachine':
                            return view('frontend.pages.minigame.slotmachine', compact('result','groups_other'));
                        case 'slotmachine5':
                            return view('frontend.pages.minigame.slotmachine5', compact('result','groups_other'));
                        case 'squarewheel':
                            return view('frontend.pages.minigame.squarewheel', compact('result','groups_other'));
                        case 'smashwheel':
                            return view('frontend.pages.minigame.smashwheel', compact('result','groups_other'));
                        case 'rungcay':
                            return view('frontend.pages.minigame.smashwheel', compact('result','groups_other'));
                        case 'gieoque':
                            return view('frontend.pages.minigame.smashwheel', compact('result','groups_other'));
                        default:
                            return redirect()->back()->withErrors($result_out->message);
                    }
                } else {
                    return redirect()->back()->withErrors($result_out->message);
                }
            } else {
                return redirect()->back()->withErrors($result_out->message);
            }
        }
        catch(\Exception $e){
            logger($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }
    }

    public function postRoll(Request $request){
        if ($request->ajax()){
            if(empty(Session::get('jwt'))){
                return response()->json([
                    'status' => 4,
                    'msg'=> 'Vui lòng đăng nhập !'
                ], 200);
            }
            try{
                $msg = "";
                $status = 0;

                $method = "POST";
                $data = array();
                $data['token'] = Session::get('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = \Request::server("HTTP_HOST");
                $data['id'] = $request->id;
                $data['numrollbyorder'] = $request->numrollbyorder;
                $data['typeRoll'] = $request->typeRoll;
                $data['numrolllop'] = $request->numrolllop;
                $data['id'] = $request->id;

                $url = '/minigame/post-minigame';
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                    $result = $result_Api->data;
                    if ($result->status == 1) {
                        return response()->json([
                            'free_wheel'=> $result->free_wheel,
                            'arr_gift' => $result->arr_gift,
                            'gift_detail' => $result->gift_detail,
                            'xgt' => $result->xgt,
                            'xValue' => $result->xValue,
                            'numrollbyorder' => $result->numrollbyorder,
                            'value_gif_bonus' => $result->value_gif_bonus,
                            'msg_random_bonus' => $result->msg_random_bonus,
                            'userpoint' => $result->userpoint,
                            'listgift' => $result->listgift,
                            'status' => 1,
                            'msg'=> $result->msg
                        ], 200);
                    } else {
                        return response()->json([
                            'status' => $result->status,
                            'msg'=> $result->msg
                        ], 200);
                    }
                } else {
                    return response()->json([
                        'status' => 0,
                        'msg'=> 'Có lỗi phát sinh.Xin vui lòng thử lại 1!'
                    ], 200);
                }
            }
            catch(\Exception $e){
                logger($e);
                return response()->json([
                    'status' => 0,
                    'msg'=> 'Có lỗi phát sinh.Xin vui lòng thử lại 2!'
                ], 200);
            }
        }
    }

    public function postBonus(Request $request){
        if ($request->ajax()){
            if(empty(Session::get('jwt'))){
                return response()->json([
                    'status' => 4,
                    'msg'=> 'Vui lòng đăng nhập !'
                ], 200);
            }
            try{
                $msg = "";
                $status = 0;

                $method = "POST";
                $data = array();
                $data['token'] = Session::get('jwt');;
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = \Request::server("HTTP_HOST");
                $data['id'] = $request->id;
                $data['numrollbyorder'] = $request->numrollbyorder;

                $url = '/minigame/post-minigamebonus';
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                    $result = $result_Api->data;
                    if ($result->status == 1) {
                        return response()->json([
                            'free_wheel'=> $result->free_wheel,
                            'arr_gift' => $result->arr_gift,
                            'gift_detail' => $result->gift_detail,
                            'xgt' => $result->xgt,
                            'xValue' => $result->xValue,
                            'value_gif_bonus' => $result->value_gif_bonus,
                            'msg_random_bonus' => $result->msg_random_bonus,
                            'userpoint' => $result->userpoint,
                            'listgift' => $result->listgift,
                            'status' => 1,
                            'msg'=> $result->msg
                        ], 200);
                    } else {
                        return response()->json([
                            'status' => $result->status,
                            'msg'=> $result->msg
                        ], 200);
                    }
                } else {
                    return response()->json([
                        'status' => 0,
                        'msg'=> 'Có lỗi phát sinh.Xin vui lòng thử lại !'
                    ], 200);
                }
            }
            catch(\Exception $e){
                logger($e);
                return response()->json([
                    'status' => 0,
                    'msg'=> 'Có lỗi phát sinh.Xin vui lòng thử lại !'
                ], 200);
            }
        }
    }

    public function getLog(Request $request){
        if(!empty(Session::get('jwt'))){
            try{
                $method = "GET";
                $data = array();
                $data['token'] = Session::get('jwt');;
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = \Request::server("HTTP_HOST");

                // $group_api = Cache::get('minigame_list');
                // if(!isset($group_api)){
                    $url = '/minigame/get-list-minigame';
                    $group_api = DirectAPI::_makeRequest($url,$data,$method);
                    if (isset($group_api) && $group_api->httpcode == 200 ) {
                        $group_api = $group_api->data->data;
                    }
                //     try{
                //         Cache::put('minigame_list', $group_api, now()->addMinutes(5));
                //     }catch(Exception $e){
                //         logger($e);
                //     }
                // }
                $groups = array_filter($group_api, function ($value) use ($request){
                    return $value->id== $request->id;
                });
                $group=null;
                foreach ($groups as $dataar) {
                    $group = $dataar;
                }
                $url = '/minigame/get-log';
                $data['id'] = $group->id;
                $data['module'] = explode('-', $group->module)[0];
                $data['page'] = $request->page;

                if ($request->filled('gift_name')) {
                    $data['gift_name'] = $request->get('gift_name');
                }
                if ($request->filled('started_at')) {
                    $data['started_at'] = $request->get('started_at');
                }
                if ($request->filled('ended_at')) {
                    $data['ended_at'] = $request->get('ended_at');
                }

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                    $result = $result_Api->data;
                    if (isset($result->status) && $result->status == 0) {
                        return redirect()->back()->withErrors($result_out->message);
                    } else {
                        $perPage = $result->per_page??0;
                        $total = $result->total??0;
                        $paginatedItems = new LengthAwarePaginator("" , $total, $perPage);
                        $paginatedItems->setPath($request->url());
                        return view('frontend.pages.minigame.log', compact('paginatedItems','result','group','group_api'));
                    }
                } else {
                    return 'sai';
                }
            }
            catch(\Exception $e){
                logger($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }else{
            return redirect('login');
        }
    }

    public function getLogAcc(Request $request){
        if(!empty(Session::get('jwt'))){
            try{
                $method = "GET";
                $data = array();
                $data['token'] = Session::get('jwt');;
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = \Request::server("HTTP_HOST");

                // $group_api = Cache::get('minigame_list');
                // if(!isset($group_api)){
                    $url = '/minigame/get-list-minigame';
                    $group_api = DirectAPI::_makeRequest($url,$data,$method);
                    if (isset($group_api) && $group_api->httpcode == 200 ) {
                        $group_api = $group_api->data->data;
                    }
                //     try{
                //         Cache::put('minigame_list', $group_api, now()->addMinutes(5));
                //     }catch(Exception $e){
                //         logger($e);
                //     }
                // }
                $groups = array_filter($group_api, function ($value) use ($request){
                    return $value->id== $request->id;
                });
                $group=null;
                foreach ($groups as $dataar) {
                    $group = $dataar;
                }
                $url = '/minigame/get-logacc';
                $data['id'] = $group->id;
                $data['module'] = explode('-', $group->module)[0];
                $data['page'] = $request->page;

                if ($request->filled('gift_name')) {
                    $data['gift_name'] = $request->get('gift_name');
                }
                if ($request->filled('started_at')) {
                    $data['started_at'] = $request->get('started_at');
                }
                if ($request->filled('ended_at')) {
                    $data['ended_at'] = $request->get('ended_at');
                }
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                    $result = $result_Api->data;
                    if (isset($result->status) && $result->status == 0) {
                        return redirect()->back()->withErrors($result_out->message);
                    } else {
                        $perPage = $result->per_page??0;
                        $total = $result->total??0;
                        $paginatedItems = new LengthAwarePaginator("" , $total, $perPage);
                        $paginatedItems->setPath($request->url());
                        return view('frontend.pages.minigame.logacc', compact('paginatedItems','result','group','group_api'));
                    }
                } else {
                    return 'sai';
                }
            }
            catch(\Exception $e){
                logger($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }else{
            return redirect('login');
        }
    }

    public function getWithdrawItem(Request $request){
        if(!empty(Session::get('jwt'))){
            try{
                $game_type = $request->game_type;
                $method = "GET";
                $data = array();
                $data['token'] = Session::get('jwt');;
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = \Request::server("HTTP_HOST");
                $url = '/minigame/get-withdraw-item';
                $data['page'] = $request->page;
                $data['game_type'] = $game_type;
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                    $result = $result_Api->data;
                    if (isset($result->status) && $result->status == 4) {
                        return redirect('login');
                    } else {
                        $paginatedItems = null;
                        if($result->withdraw_history->total>0){
                            $perPage = $result->withdraw_history->per_page??0;
                            $total = $result->withdraw_history->total??0;
                            $paginatedItems = new LengthAwarePaginator("" , $total, $perPage);
                            $paginatedItems->setPath($request->url());
                        }
                        return view('frontend.pages.minigame.withdrawitem', compact('paginatedItems','result','game_type'));
                    }
                } else {
                    return 'sai';
                }
            }
            catch(\Exception $e){
                logger($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }else{
            return redirect('login');
        }
    }

    public function postWithdrawItem(Request $request){
        if(!empty(Session::get('jwt'))){
            $this->validate($request, [
                'idgame' => 'required',
                'package' => 'required'

            ], [
                'idgame.required' => "Vui lòng nhập ID trong game để rút tiền",
                'package.required' => "Vui lòng chọn gói muốn rút"

            ]);
            try{
                $game_type = $request->game_type;
                $method = "POST";
                $data = array();
                $data['token'] = Session::get('jwt');;
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = \Request::server("HTTP_HOST");
                $url = '/minigame/post-withdraw-item';
                $data['type'] = $game_type;
                $data['package'] = $request->package;
                $data['idgame'] = $request->idgame;
                $data['phone'] = $request->phone;
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200 ) {
                    $result = $result_Api->data;
                    if (isset($result->status) && $result->status == 4) {
                        return redirect('login');
                    }else if(isset($result->status) && $result->status == 0){
                        return redirect()->back()->withErrors($result->msg);
                    }else {
                        return redirect()->back()->with('success',__($result->msg));
                    }
                } else {
                    return 'sai';
                }
            }
            catch(\Exception $e){
                logger($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }else{
            return redirect('login');
        }
    }

}
