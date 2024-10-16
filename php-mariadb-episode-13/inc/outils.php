<?php
function alerte($message, $classe_css) {
    $html = "<div class=\"alert $classe_css\">";
    $html .= $message;
    $html .= "</div>";
    return $html;
}

function info_connexion($role) {
    $html = '<div class="container-fluid">';
    $html .= "<p>Rôle : $role</p>";
    if ($role == "anonyme") {
        $html .= '<a href="./connecter.php" class="btn btn-outline-info">Se connecter</a>';
    } else {
        $html .= '<a href="./deconnecter.php" class="btn btn-outline-info">Se déconnecter</a>';
    }
    $html .= "</div>";
    return $html;
}

function verifier_role($role, $role_attendu) {
    if ($role != $role_attendu) {
        header("Location: ./index.php");
        exit;
    }
}
