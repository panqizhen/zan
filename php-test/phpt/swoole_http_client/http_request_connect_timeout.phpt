--TEST--
swoole_http_client: connect timeout

--SKIPIF--
<?php require  __DIR__ . "/../inc/skipif.inc"; ?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0


--FILE--
<?php
require_once __DIR__ . "/../inc/zan.inc";

$simple_http_server = __DIR__ . "/../../apitest/swoole_http_client/simple_http_server.php";
$closeServer = start_server($simple_http_server, HTTP_SERVER_HOST, $port = get_one_free_port());

require_once __DIR__ . "/../../apitest/swoole_http_client/http_request_connect_timeout.php";


?>

--EXPECT--
timeout