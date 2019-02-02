<?php
if(!function_exists('bootstrap_url')){
    function bootstrap_url($url){
        return site_url(config_item('bootstrap_path').$url);
    }    
}

if(!function_exists('js_url')){
    function js_url($url){
        $file = explode("/",$url);
        $file = $file[count($file)-1];
        return site_url('application/views/js/'.$url.'?'.config_item("version.$file"));
    }
}
if(!function_exists('css_url')){
    function css_url($url){
        $file = explode("/",$url);
        $file = $file[count($file)-1];
        return site_url('application/views/css/'.$url.'?'.config_item("version.$file"));
    }
}