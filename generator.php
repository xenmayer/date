<?php

require 'vendor/autoload.php';

use Jenssegers\Date\Date;

// Set the language
setlocale(LC_ALL, $argv[1] ?: 'en');

$months = array(
    'month.full.january',
    'month.full.february',
    'month.full.march',
    'month.full.april',
    'month.full.may',
    'month.full.june',
    'month.full.july',
    'month.full.august',
    'month.full.september',
    'month.full.october',
    'month.full.november',
    'month.full.december',
);

$days = array(
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
);

$translations = array();

foreach ($months as $month) {
    $date = new Date($month);
    $translation = strftime('%B', $date->getTimestamp());
    $translations[$month] = $translation;

    echo "'".$month."'\t=> '".$translation."',\n";
}

echo "\n";

foreach ($days as $day) {
    $date = new Date($day);
    $translation = strftime('%A', $date->getTimestamp());
    $translations[$day] = $translation;

    echo "'".$day."'\t=> '".$translation."',\n";
}
