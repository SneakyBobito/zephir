<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 5/17/14
 * Time: 7:58 AM
 */

namespace Zephir\Documentation;


class Theme {

    protected $themeDir;
    protected $outputDir;

    function __construct($themeDir , $outputDir)
    {
        $this->outputDir = $outputDir;
        $this->themeDir = $themeDir;
    }


    public function drawFile(AbstractFile $file){

        $output   = pathinfo( $this->themeDir . "/" . $file->getOutputFile());
        $outputDirname  = $output["dirname"];
        $outputBasename = $output["basename"];
        $outputFilename = $outputDirname . "/" . $outputBasename;

        $input   = pathinfo( $this->themeDir . "/" . $file->getTemplateName());
        $inputDirname  = $input["dirname"];
        $inputBasename = $input["basename"];
        $inputFilename = $inputDirname . "/" . $inputBasename;


        // todo : check if writable
        if(!file_exists($outputDirname))
            mkdir($outputDirname,0777,true);

        $template = new Template($file->getData() , $inputFilename);
        touch($outputFilename);
        $template->write($outputFilename);


    }

} 