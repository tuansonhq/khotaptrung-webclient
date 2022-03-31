<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;

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
}
