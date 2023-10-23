<?php
if(!function_exists('page_title'))
{
    function page_title($title)
    {
        $base_title= 'laracarte-liste of artisans';
        if($title ==='') {
            return $base_title;
        } else
            return $title.'|' . $base_title;
    }
}
if(!function_exists('set_cctive_route'))
{
    function set_cctive_route($route)
    {
        return Route::is($route)?'active':'';
    }
}