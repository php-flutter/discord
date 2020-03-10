<?

namespace widgets\layout; // /flutter/document.php

use widgets\widget;

class separator extends widget
{
    /**
     * Separates contents
     */
    function __construct(){}
    function build(){
        ?>
            <div class="separator"></div>
        <?
    }
}
