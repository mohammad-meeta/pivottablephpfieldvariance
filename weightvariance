<?php
static $mines = 5000;     //static variables for finding min year
static $maxes = 0;        //static variables for finding max year
static $minx = 0;         //static variables for finding min year weight field
static $maxx = 0;         //static variables for finding max year weight field
static $rowcount = 0;     //static variables for row counter
static $minkala = "";     //static variables for finding min year product field
static $maxkala = "";     //static variables for finding min year product field

//filling baseyear array with years
$baseyear[] = $data->field_field_pri_exp_year['0']['rendered']['#markup'];
$result = array_combine($baseyear, $baseyear);

//finding min year
$minyr = min($result);
$mini[] = $data->field_field_pri_exp_year['0']['rendered']['#markup'];
if ($mines > $mini[0]) {
    $mines = $mini[0];
}

// finding max year
$maxyr = max($result);
$maxi[] = $data->field_field_pri_exp_year['0']['rendered']['#markup'];
if ($maxes < $maxi[0]) {
    $maxes = $maxi[0];
}

//findin min year weight and product value
if(($minyr == $mines)) {
    $minx = $data->field_field_pri_exp_weight['0']['raw']['value'];
    $minkala = $data->field_field_pri_exp_product['0']['rendered']['#markup'];
}

//findin max year weight and product value
if(($maxyr == $maxes)) {
    $maxx = $data->field_field_pri_exp_weight['0']['raw']['value'];
    if($rowcount > 0) {
        $maxkala = $data->field_field_pri_exp_product['0']['rendered']['#markup'];
    }
}

//calculate weight variance
if(($rowcount > 0) && ($minkala == $maxkala)) {
    $vari = ($maxx - $minx) / $minx * 100;
    print number_format($vari, 2, '.', '');
}
$rowcount++;
?>
