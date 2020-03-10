<?

namespace widgets\layout;

use widgets\widget;

class footer extends widget
{
    /**
     * Create new footer
     * @param object containing sections
     */
    function __construct($opt){
        $this->obj = (object) $opt;
    }
    function build(){
        ?>
            <div class="footer">
            <?
                foreach ($this->obj as $buildable) {
                    if (!$buildable instanceof widget) throw new \Exception("Expected instance of widget", 1);
                    $buildable->build();
                }
                ?>
            </div>
        <?
    }
}
