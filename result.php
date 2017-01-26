<?php
static $mines = 5000;
static $maxes = 0;
$baseyear[] = $data->field_field_pri_exp_year['0']['rendered']['#markup'];
$result = array_combine($baseyear, $baseyear);

//mines find
$minyr = min($result);
$mini[] = $data->field_field_pri_exp_year['0']['rendered']['#markup'];
if ($mines > $mini[0]) {
    $mines = $mini[0];
}

// finding max
$maxyr = max($result);
$maxi[] = $data->field_field_pri_exp_year['0']['rendered']['#markup'];
if ($maxes < $maxi[0]) {
    $maxes = $maxi[0];
}

if(($maxyr == $maxes) && ($maxyr != $mines)) {
    $x = $data->field_field_pri_exp_weight['0']['raw']['value'];
    print number_format($x, 2, '.', '');
}

?>
