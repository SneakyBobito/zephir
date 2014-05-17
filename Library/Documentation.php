<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | http://zephir-lang.com/license.html                                      |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

namespace Zephir;
use Zephir\Documentation\File;


/**
 * Documentation Generator
 */
class Documentation
{

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var CompilerFile[]
     */
    protected $classes;

    /**
     * @param CompilerFile[] $files
     * @param Config         $config
     */
    public function __construct(array $classes,Config $config)
    {
        $this->config = $config;
        $this->classes = $classes;
    }

    public function build(){

        $files = array();



        foreach($this->classes as $className => $class){
            $file = new File\ClassFile($this->config,$class->getClassDefinition());
            $file->writeFile("/home/blabka");
        }

    }




    protected function __getThemeDirectory(){
        return $this->config->get("directory","theme");
    }

    protected function __getOutputDirectory(){
        return $this->config->get("output-directory");
    }

}