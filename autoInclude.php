<?
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $file)) {
        require __DIR__ . DIRECTORY_SEPARATOR . $file;
        return true;
    }
    return false;
});