<?php
function alerte($message, $classe_css) {
    $html = "<div class=\"alert $classe_css\">";
    $html .= $message;
    $html .= "</div>";
    return $html;
}
