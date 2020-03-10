<?

namespace widgets\layout;

use widgets\widget;

class navigationSection extends widget
{
    /**
     * Section in navigation, should contain header and links
     * @param object containing array of widgets
     */
    function __construct($opt){
        $this->obj = $opt;
    }
    function build(){
        ?>
            <div class="navigation-section">
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
