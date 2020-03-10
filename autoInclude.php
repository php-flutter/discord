<?
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require __DIR__ . DIRECTORY_SEPARATOR . $file;
        return true;
    }
    return false;
});