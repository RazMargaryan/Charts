<?php

namespace App\Http\Controllers;

use App\ClosedOrders;
use App\Orders;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data = ClosedOrders::all();
//        return view('welcome', compact('data'));
//        $client = new Client();
//            $data = [
//                "path"=> "/test",
//                "recursive"=> false,
//                "include_media_info"=> false,
//                "include_deleted"=> false,
//                "include_has_explicit_shared_members"=> false,
//                "include_mounted_folders"=> true,
//                "include_non_downloadable_files"=> true
//            ];
//
//        $response = $client->post("https://api.dropboxapi.com/2/files/list_folder/get_latest_cursor", [
//            'headers' => [
//                "Authorization" => "Bearer wXckMpBHEaAAAAAAAAAAG755wubhd80Es73EWPC3oOUuHcw9M_qz25srPRwF8aaK",
//                "Content-Type" => "application/json"
//            ],
//            'json' => $data
//        ]);
//        $results = json_decode($response->getBody()->getContents());
//        dd($results);
        $app = new DropboxApp("p90anz97t1e3mf7", "ppqd64ejadnn4ns", 'vvg4S9DdQV0AAAAAAADqxstBqyGyEYTBCC0PdjJa9TfC7Nrgr7cqyzjsuFwYmd_L');
        $dropbox = new Dropbox($app);/* Full path within dropbox to hearbeat file*/

        $file = $dropbox->download("/Tradingbox/Heartbeat.txt");
        $contents = $file->getContents();
            dd($contents);
//        file_put_contents(__DIR__ . "/file.txt", $contents);
//        $fp = fopen("file.txt", "r");
//        dd($fp);
//        $pos = -1;
//        $t = "";
//        $i = 3;
//        while ($i!=0)
//        {
//            if ($t=="\n")
//                $i--;
//            fseek($fp, $pos, SEEK_END);
//            $t = fgetc($fp);
//            $pos = $pos - 1;
//        }
//        $dates = array();
//        while(!feof($fp)) {
//            array_push($dates,fgets($fp));
//        }
//        fclose($fp);
//        $last = strtotime($dates[2]);
//        $prev = strtotime($dates[1]);
//        $now = new DateTime();
//
//        /* Set the timezone of the hearbeat file correctly. Timezone of server doesn't matter */
//
//        $now->setTimezone(new DateTimeZone('Europe/Vilnius'));
//        $curr = strtotime($now->format("Y-m-d H:i:s"));
//// echo $now->format("Y-m-d H:i:s")."<br>"; // debug mode
//        $currdiff = $curr - $last;
//        $prevdiff = $last - $prev;
//        $fp = fopen("status.txt","r");
//        $text = fgets($fp);
//        fclose($fp);
//        $status = explode(" ",$text);
//        if ($currdiff > 300) // Originally 300, proven too sensitive
//        {
//            if ($status[0]==0)
//            {
////	    echo "Multicharts Heartbeat Lost!"; //debug mode
//                email("Multicharts Heartbeat Lost!");
//                $fp = fopen("status.txt","w+");
//                fwrite($fp,"1 0");
//                fclose($fp);
//            }
//        }
//        else
//        {
//            if ($status[1]==0)
//            {
////	    echo "Multicharts heartbeat back!"; //debug mode
//                email("Multicharts Heartbeat Back!");
//                $fp = fopen("status.txt","w+");
//                fwrite($fp,"0 1");
//                fclose($fp);
//            }
//        }
        /*elseif ($currdiff <= 300 && $prevdiff <= 300)
        {
            $fp = fopen("status.txt","w+");
            fwrite($fp,"0 0");
            fclose($fp);
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders() {
        $data = Orders::select('id','tooltext', 'high', 'open', 'low', 'close', 'volume')->get();
        foreach ($data as $item){
            $item['x'] = $item['id'];
        }
        return response()->json(compact('data'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
