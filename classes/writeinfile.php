<?php

class fileWork{

    public $file_name;
    public $path;
    public $fullpath;
    public $fp;
    public static $writecount = 0;

    public static function getCount(){
        return self::$writecount;
    }

    function __construct($file_name){
        $this->file_name = $file_name;
        $this->path = '/var/www/html/files/';
        $this->fullpath = $this->path.$this->file_name;
        if(!is_writable($this->fullpath)){
            echo "Can't writable";
            exit;
        }
        if(!$this->fp = fopen($this->fullpath,'a')){
            echo "Can't open in append";
            exit;
        }
    }

    function write($data){
        self::$writecount++;
        if(fwrite($this->fp,$data.PHP_EOL)===FALSE){
            return "Can't write";
        }
        return "Succes write";
    }

    function __destruct()
    {
        echo "Closed";
        fclose($this->fp);
    }

    function getInfo(){
        return $this->path;
    }
}

?>