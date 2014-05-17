<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 5/17/14
 * Time: 7:53 AM
 */

namespace Zephir\Documentation;


class Template {

    protected $filePath;
    protected $data;

    function __construct($data, $filePath)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }


    public function write($outputFile){

        ob_start();

        foreach($this->data as $name=>$value){
            $$name = $value;
        }

        include($this->filePath);

        $content = ob_get_clean();

        file_put_contents($outputFile,$content);

    }


} 