<?php
session_abort('');
session_cache_expire();
session_cache_limiter();
session_commit();
session_create_id();
session_decode();
session_destroy();
session_encode();
session_gc();
session_get_cookie_params();
session_id();
session_module_name();
session_name();
session_regenerate_id();
session_register_shutdown();
session_reset();
session_save_path();
session_set_cookie_params();
session_set_save_handler();
session_start();
session_status();
session_unset();
session_write_close();


$_GET[''];
$_POST[''];
$_SESSION[''];
$_COOKIE[''];

$_ENV[''];
$_SERVER[''];
$_REQUEST[''];

session_start();

?>

<?php
$content = '<html>
<head>
  <script>--Some javascript and libraries included--</script>
  <title></title>
</head>
<body>
   <style>--Some Styling--</style>
</body>
</html>';

$encodedContent = base64_encode($content);
$ContentDecoded = base64_decode($content);

convert_uudecode();

?>
