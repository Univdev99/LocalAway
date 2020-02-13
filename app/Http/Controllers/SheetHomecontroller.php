<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Revolution\Google\Sheets\Facades\Sheets;

class SheetHomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /**
         * Service Account demo
         */

        $sheets = Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
            ->sheet('DataSheet')->get();
        dd($sheets);

        // ->sheetById('DataSheet')
        // ->all();
        // ->sheetById('0')

        // ->all();

        $posts = array();

        foreach ($sheets AS $data) {

            $posts[] = array(
                'name' => $data[0],
                'message' => $data[1],
                'created_at' => $data[2],
            );
        }

        dd($post);
    }
}
