<?php
class Config{

    private static $config_project = [];

    static function get_config($file_name, $key_config = ""){
        $file_name = strtolower($file_name);
        $config_path = $_SERVER['DOCUMENT_ROOT']."/configs/".$file_name.'.php';

        if(file_exists($config_path)){
            

            if (!in_array($file_name, array_keys(self::$config_project))){
                $class_config = include $config_path;
                self::$config_project[$file_name] = $class_config;
            }

            if ($key_config == ""){
                return self::$config_project[$file_name];
            } else {
                return self::$config_project[$file_name][$key_config] ;
            }
                
             
        }
        echo NULL;

        
    }


}
?>