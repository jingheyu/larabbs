<?php

if (! function_exists('route_class')) {
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }

}

if (! function_exists('time_array_format_problem_solution')) {
    function time_array_format_problem_solution($array_include_time)
    {

        $time_key = array('email_verified_at', 'created_at', 'updated_at');
        foreach ($array_include_time as $key => $value) {
            foreach ($value as $k => $v) {
                if (in_array($k, $time_key)) {
                    $array_include_time[$key][$k] = date("Y-m-d H:i:s", strtotime($v));
                }
            }
        }
        return $array_include_time;
    }
}


if (! function_exists('active_use')) {
    function active_use($address, $parames='')
    {
        return active($address . '/*');
    }
}
