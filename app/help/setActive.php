<?php


namespace app\help;



trait setActive{

    public static function active($array)
    {
        if (!empty($array)) {

            $seg_array = [];
            foreach ($array as $key => $url) {

                if (Request::segment($key + 1) == $url) {


                    $seg_array[] = $key;
                }

            }


            if (count($seg_array) == count(Request::segments())) {
                return "active";


            }

        }


    }






}
