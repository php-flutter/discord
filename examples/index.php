<?
namespace examples;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../autoInclude.php";

use widgets\document;
use widgets\head\title;
use widgets\head\responsiveness;
use widgets\head\styles;
use widgets\widgetList;

$document = new Document([
    "head" => new WidgetList([
        new Title("PHP Flutter"),
        new Responsiveness(),
        new Styles()
    ]),
    "body" => [

    ]
]);

$document->build();