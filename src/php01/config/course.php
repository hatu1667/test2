<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "お名前は" . $company . "ですね";