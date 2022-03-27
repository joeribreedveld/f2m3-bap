<?php
header("HTTP/1.1 302 Not Found");
header("Location: http://ma-web.nl"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?>