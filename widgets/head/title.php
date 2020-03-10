<?

namespace widgets\head; // /flutter/document.php

use widgets\widget;

class title extends widget
{
    /**
     * Sets the page title
     * @param string Title to show
     */
    function __construct($opt){
        $this->title = $opt;
    }
    function build(){
        ?>
        <title><?=$this->title; ?></title>
        <?
    }
}
