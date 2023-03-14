<?php
$donations = 250;
$required = 600;
$percent = $donations * 100 / $required;
$warningState = false;
$progressClassState = "";
if ($percent < 50) {
    $progressClassState = "under-50";
}
if ($percent < 25) {
    // Aww. Add danger class.
} else if ($percent > 25 && $percent < 75) {
    // Mmh. Add warning class.
} else if ($warningState) {
    // Almost there. Add warning class.
} else {
    // Yay. Add succes class. Or warning class if only one month to succeed.
}

$fsnProgress = $_COOKIE['fsnProgress'];
$fsnProgressClass = "";
if ($fsnProgress) {
    $fsnProgressClass = "progress-bar-fixed";
} else {
    setcookie("fsnProgress", true, time() + 3600);
}
?>
<div class="progress d-none">
    <!-- INFO INFO INFO: de 0 à 25% on met en rouge (danger) -->
    <!-- INFO INFO INFO: la barre de progression plusse le badge au-dessus, -->
    <!-- INFO INFO INFO: de 25 à 75 en jaune (warning) et de 75 à 100 -->
    <!-- INFO INFO INFO: en vert (success) -->
    <!-- INFO INFO INFO: SAUF si dernier mois avant fin de semestre -->
    <!-- INFO INFO INFO: on met en jaune (warning) afin de sensibiliser -->
    <!-- INFO INFO INFO: à l'échéance de paiement -->
    <div id="progress-bar" class="progress-bar <?php echo $fsnProgressClass; ?>" role="progressbar" aria-label="financement" style="position: relative; overflow:visible; --progress-percent: <?php echo round($percent); ?>; width: <?php echo $progressCookieVal; ?>; --progress-abs: <?php echo round($donations); ?>;" aria-valuenow="<?php echo $percent; ?> " aria-valuemin="0" aria-valuemax="100">
        <span class="<?php echo $progressClassState; ?>">
            <span class="value-percent"><?php echo ($fsnProgress) ? round($percent) : ""; ?></span>% <span class="value-abs"><?php echo ($fsnProgress) ? $donations : ""; ?></span>.- CHF obtenus&nbsp;/ <?php echo $required; ?>.- CHF de frais
        </span>
    </div>
</div>