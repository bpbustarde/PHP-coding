<?php
function create_copyright_notice($companyName) {
    $year = date("Y");
    $message = "&copy; " . $year . " " . $companyName . ". All rights reserved.";
    return $message;
}
?>
    <hr>
    <p><?= create_copyright_notice("Santa's Candy Store") ?></p>
</div>
</body>
</html>