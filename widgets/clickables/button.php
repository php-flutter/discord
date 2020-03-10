<?

namespace widgets\clickables; // /flutter/document.php

use widgets\widget;

class button extends widget
{
    /**
     * New Button widget
     * @param object containing text and options (element, variant, action and/or attributes)
     */
    function __construct($opt){
        $this->obj = (object) $opt;
        $this->elmn = @$this->obj->element ?: "button";
        $this->variant = @$this->obj->variant ?: "blue";
        $this->text = @$this->obj->text ?: "";
        $this->action = @$this->obj->action ?: "";

        $this->attributes = $this->generateAttributes($opt, ["element", "variant", "text", "action"]);
    }
    function build(){
        ?>
            <<?=$this->elmn; ?> onclick="<?=$this->action; ?>" class="button button-variant-<?=$this->variant; ?>" <?=$this->attributes; ?>><?=$this->textOrBuild($this->text); ?></<?=$this->elmn; ?>>
        <?
    }
}
