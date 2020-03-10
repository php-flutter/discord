<?

namespace widgets\clickables; // /flutter/document.php

use widgets\widget;

class button extends widget
{
    /**
     * Create new document root
     * @param object containing text and/or variant
     */
    function __construct($opt){
        $this->obj = (object) $opt;
        $this->elmn = @$this->obj->element ?: "button";
        $this->variant = @$this->obj->variant ?: "blue";
        $this->text = @$this->obj->text ?: "";
    }
    /**
     * Build the document
     */
    function build(){
        ?>
            <<?=$this->elmn; ?> class="button button-variant-<?=$this->variant; ?>"><?=$this->textOrBuild($this->text); ?></<?=$this->elmn; ?>>
        <?
    }

    function textOrBuild($arg){
        if($arg instanceof widget) return $arg->build();
        echo $arg;
    }
}
