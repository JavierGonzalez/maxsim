<?php # maxsim.tech — MIT License — Copyright (c) 2005-2020 Javier González González <gonzo@virtualpol.com>


$maxsim['template']['js_array']['ide_dir'] = str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__).'/';
$maxsim['template']['js_array']['ide_target'] = $maxsim['app'];

$maxsim['template']['js'] .= '

document.querySelector("body").addEventListener("keydown", function(e) {
    if (e.keyCode == 27 && typeof ace == "undefined") {
        import(ide_dir + "ide.js");
        e.preventDefault();
    }
});

';