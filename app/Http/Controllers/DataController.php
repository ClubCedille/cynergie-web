<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Counter;
use App\Helpers\Filter;


class DataController extends Controller
{
    private $prometheusUrl = "192.168.0.1:9090/api/v1/";

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $client = new Client();
        $date = $request->input('date');
        $from = $request->input('from');
        $to = $request->input('to');

        if (isset($date) && $date !== null && $date !== "") {

            $validatedData = $request->validate([
                'counter' => 'string|required|max:255',
                'date' => 'date|required',
            ]);

           return response()->json(Filter::getDataDay($validatedData, $client,$this->prometheusUrl)) ;

        }

        if (isset($from) && $from !== "" && isset($to) && $to !== "") {

            $validatedData = $request->validate([
                'counter' => 'string|required|max:255',
                'from' => 'date|required',
                'to' => 'date|required',
            ]);

            return response()->json(Filter::getDataDay($validatedData, $client)) ;

        }

        return response()->json("bad parameters , verify and try again", 400);

    }


    /**
     * @return string list of all controllers names
     */
    public function getNames()
    {
        return Counter::all("name")->toJson(JSON_PRETTY_PRINT);
    }
}
