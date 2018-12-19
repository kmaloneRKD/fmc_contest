<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $values = [
        ];

        return view('home')->with($values);
    }

    public function getVideos(Request $request)
    {
        $values = [
        ];

        return view('videos')->with($values);
    }

    public function getBurnoff(Request $request)
    {
        $videoId = $_GET['videoId'];

        $values = [
            'videoId' => $videoId
        ];

        return view('burnoff')->with($values);
    }

    public function getForm(Request $request)
    {
        $values = [
        ];

        return view('form')->with($values);
    }

    
    public function getThankyou(Request $request)
    {
        $values = [
        ];

        return view('thankyou')->with($values);
    }

    public function postContest(){

              // Opens a connection to a MySQL server.
              $connection=mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));
              if (!$connection) {
                die('Not connected : ' . mysqli_error());
              }
              
              // Sets the active MySQL database.
              $db_selected = mysqli_select_db($connection, env('DB_USERNAME'));
              if (!$db_selected) {
                die ('Can\'t use db : ' . mysqli_error($connection));
              }
              
              // Inserts new row with place data.
              //MARKERS TABLE
              $query = sprintf("INSERT INTO contest_submissions " .
                       " (sitename, address, city, province, superintendant, projecttype, projectnum, subsite, lat, lng, trades, verified) " .
                       " VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
                       mysqli_real_escape_string($connection, $name),
                       mysqli_real_escape_string($connection, $address),
                       mysqli_real_escape_string($connection, $city),
                       mysqli_real_escape_string($connection, $province),
                       mysqli_real_escape_string($connection, $super),
                       mysqli_real_escape_string($connection, $pjtype),
                       mysqli_real_escape_string($connection, $pjnum),
                       mysqli_real_escape_string($connection, $subsite),
                       mysqli_real_escape_string($connection, $lat),
                       mysqli_real_escape_string($connection, $lng),
                       mysqli_real_escape_string($connection, ''),
                       mysqli_real_escape_string($connection, $verified)
                      );
      
              $result = mysqli_query($connection, $query);
                  //END MARKERS TABLE

                if (!$result) {
                    die('Invalid query: ' . mysqli_error($connection));
                }
                else{
                    return ['success' => true];
                }    
    }
}