<?php
// -----------------------------------------------------------------------------
// outils.php
//
// Frederic Lefevre <fred.lefevre@gmail.com>
// -----------------------------------------------------------------------------

function supprimer_dossier($un_dossier) {
    if (!file_exists($un_dossier)) {
        return true;
    }
    if (!is_dir($un_dossier)) {
        return unlink($un_dossier);
    }
    foreach (scandir($un_dossier) as $un_element) {
        if ($un_element != "." && $un_element != ".." && !supprimer_dossier("$un_dossier/$un_element")) {
            return false;
        }
    }
    return rmdir($un_dossier);
}

function copier_dossier($source, $cible) {
    if (is_dir($source)) {
        if (!file_exists($cible)) {
            if (!mkdir($cible)) {
                return false;
            }
        }
        foreach (scandir($source) as $un_element) {
            if ($un_element != "." && $un_element != ".." && !copier_dossier("$source/$un_element", "$cible/$un_element")) {
                return false;
            }
        }
    } else {
        if (!copy($source, $cible)) {
            return false;
        }
    }
    return true;
}