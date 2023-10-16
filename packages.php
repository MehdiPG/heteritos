<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'Heteritos 4',
    'title' => 'Heteritos 4',
    'version' => '4.0.0',
    'priority' => 0,
    'location' => 'https://github.com/MehdiPG/heteritos/blob/main/heteritos-4.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
