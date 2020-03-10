<?

namespace widgets\head; // /flutter/document.php

use widgets\widget;

class responsiveness extends widget
{
    /**
     * Add responsive tag to head
     */
    function __construct(){}
    function build(){
        ?>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?
    }
}
