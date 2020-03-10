<?

namespace widgets;// /flutter/document.php

class document extends widget
{
    /**
     * Create new document root
     * @param array containing head and body
     */
    function __construct($opt){
        $obj = (object) $opt;
        $this->obj = $obj;
        $this->head = (empty($obj->head) ? null : $obj->head);
        $this->body = (empty($obj->body) ? null : $obj->body);
    }
    /**
     * Build the document
     */
    function build(){
        ?>
        <html>
        <head>
            <? $this->tryBuild("head"); ?>
        </head>
        <body>
            <div class="page-wrapper">
                <? $this->tryBuild("body"); ?>
            </div>
        </body>
        </html>
        <?
    }
}
