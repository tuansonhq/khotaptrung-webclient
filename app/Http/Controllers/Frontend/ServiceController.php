<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Library\AuthCustom;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;

use Session;
use function PHPUnit\Framework\isEmpty;

class ServiceController extends Controller
{

    public function getShowService(Request $request){

        $url = '/get-show-service';
        $method = "GET";
        $val = array();

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if (isset($result_Api) && $result_Api->httpcode == 200) {

            $data = $result_Api->data;
            $data = $data->data;

            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
            Session::put('path', $_SERVER['REQUEST_URI']);
            return view('frontend.pages.service.index')
                ->with('data', $data);
        } else {
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }

    }

    public function getShowServiceData(Request $request)
    {
        if ($request->ajax()){

            $page = $request->page;
            $url = '/get-show-service';
            $method = "GET";

            $valajax = array();
            $valajax['page'] = $page;

            if (isset($request->title) || $request->title != '' || $request->title != null) {

                $valajax['title'] = $request->title;
            }

            $result_Apiajax = DirectAPI::_makeRequest($url,$valajax,$method);

            if (isset($result_Apiajax) && $result_Apiajax->httpcode == 200) {

                $dataajax = $result_Apiajax->data;
                $dataajax = $dataajax->data;

                $dataajax = new LengthAwarePaginator($dataajax->data, $dataajax->total, $dataajax->per_page, $page, $dataajax->data);

                return view('frontend.pages.service.function.__get__show__data')
                    ->with('data', $dataajax);
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function getShow(Request $request,$slug){

        $url = '/get-show-service';
        $method = "GET";
        $val = array();
        $val['slug'] = $slug;

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        if(isset($result_Api) && $result_Api->httpcode == 200) {
            $result = $result_Api->data;
            $data = $result->data;
            $categoryservice = $result->categoryservice;
            $categoryservice = $categoryservice->data;

            Session::put('path', $_SERVER['REQUEST_URI']);

            return view('frontend.pages.service.show')
                ->with('categoryservice', $categoryservice)
                ->with('data', $data)
                ->with('slug', $slug);
        }

    }

    public function getBuyServiceHistory(Request $request)
    {
        if (AuthCustom::check()) {
            $url = '/service-history';
            $method = "GET";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;
            $result_Api = DirectAPI::_makeRequest($url, $val, $method);



            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;

                if ($result->status == 1) {

                    $categoryservice = $result->categoryservice;
//                    return  $categoryservice;

                    return view('frontend.pages.service.getBuyServiceHistory')->with('categoryservice', $categoryservice);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }

    }

    public function postPurchase(Request $request,$id){
        $url = '/service/purchase';
        $method = "POST";
        $val = array();
        $val['id'] = $id;

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        return $result_Api;
    }

}
