<?php

require_once 'header.php';   

echo '
<script src="public/report_total.js"></script>

<header>
    <h1>Report total</h1>
</header>
<div id="but_excel"> 
	<a href="#"><img src="public/css/images/csv-icon.png"></a>
</div> 
<div id="total" class="total"></div>

<div id="report_total"></div>
';

require 'footer.php';
?>