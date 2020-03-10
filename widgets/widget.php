<?

namespace widgets;

/**
 * Default widget class
 */
class widget
{
    /**
     * Creates new widget that can be built
     * @param settings settings for the widget
     */
    function __construct($settings)
    {
        $obj = (object) $settings;
        $this->obj = $obj;
    }
    /**
     * Builds the widget, outputing directly
     * @return undefined returns nothing
     */
    function build()
    {
        return null;
    }

    /**
     * Renders text/widget
     */
    function textOrBuild($arg){
        if($arg instanceof widget) return $arg->build();
        echo $arg;
    }
    /**
     * Generates HTML attributes from array, ignoring $ignore
     * @param array to be generated from
     * @param array ignoring names
     * @return string
     */
    function generateAttributes($array, $ignore = [])
    {
      $attributes = "";
      foreach($array as $name => $value){
        if(in_array($name, $ignore))continue;
        $attributes .= $name . "='" . htmlentities($value) . "'";
      }
      return $attributes;
    }
    /**
     * Tries building widget, if the widget was set in settings
     * @param widget $widget the widget to be built
     */
    function tryBuild($widget)
    {
        //var_dump($this->$obj);
        //($this->$obj instanceof widget ? $this->$obj->build() : null);

        $obj = $this->$widget;
        buildAgain: if ($obj instanceof widget) {
            $obj = $obj->build();
            goto buildAgain;
        } else {
            return;
        }
    }
}
