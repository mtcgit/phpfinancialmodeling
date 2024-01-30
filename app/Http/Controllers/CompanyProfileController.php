<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Inertia\Inertia;


class CompanyProfileController extends Controller
{
    public function index()
    {
  

    }

    public function search(Request $request){

        set_time_limit(0); 
        $api = $request->input('category');
        $search = $request->input('search');

        //$url_info = "https://financialmodelingprep.com/api/v3/search?query=AA&apikey=".$api;

        $url_info = "https://financialmodelingprep.com/api/v3/search?query=AA&apikey=b64026e6d3bf306bdd56eeec49686e23";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url_info);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $output = curl_exec($ch);

        if (curl_error($ch)) {
            return 'error:' . curl_error($ch);
        } else {
            $list = json_decode($output);
            return view('list', compact('list'));
        }

    }




}
