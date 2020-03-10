<?

namespace widgets\head; // /flutter/document.php

use widgets\widget;

class document extends widget
{
    /**
     * Create new document root
     * @param array containing head and body
     */
    function __construct($opt){
        $this->title = $opt;
    }
    /**
     * Build the document
     */
    function build(){
        ?>
        <title><?=$this->title; ?></title>
        <?
    }
}
