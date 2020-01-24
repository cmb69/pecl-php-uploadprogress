--TEST--
uploadprogress_get_info - Warns when too few arguments

--SKIPIF--
<?php
if (!extension_loaded('uploadprogress')) exit('skip extension not loaded');

--FILE--
<?php
$info = uploadprogress_get_info();
var_dump($info);

--EXPECTF--
Warning: uploadprogress_get_info() expects exactly 1 parameter, 0 given in %s/uploadprogress_get_info_error001.php on line %d
NULL
