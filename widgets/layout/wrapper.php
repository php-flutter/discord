<?

namespace widgets\layout; // /flutter/document.php

use widgets\widget;

class wrapper extends widget
{
    /**
     * Create new document root
     * @param object containing text and/or variant
     */
    function __construct($opt){
        $this->obj = (object) $opt;
    }
    /**
     * Build the document
     */
    function build(){
        ?>
            <div class="layout-wrapper">
            <? $this->tryBuild("obj"); ?>
            </div>
        <?
    }
}
