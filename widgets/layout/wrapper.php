<?

namespace widgets\layout; // /flutter/document.php

use widgets\widget;

class wrapper extends widget
{
    /**
     * Wraps content for better readability
     * @param object child to render
     */
    function __construct($opt = []){
        $this->obj = (object) $opt;
    }
    function build(){
        ?>
            <div class="layout-wrapper">
            <? $this->tryBuild("obj"); ?>
            </div>
        <?
    }
}
