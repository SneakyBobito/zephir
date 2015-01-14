<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2015 Zephir Team and contributors                     |
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

namespace Zephir\Documentation;


/**
 * Annotation
 *
 * A parsed Annotation
 */
class Docblock
{

    protected $description;
    protected $annotations;
    protected $summary;


    public function getDescription() {
        return $this->description;
    }

    public function getAnnotations() {
        return $this->annotations;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function addAnnotation($annotation) {
        $this->annotations[] = $annotation;
    }
    
    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }




    
}