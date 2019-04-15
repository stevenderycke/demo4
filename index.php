<?php
header('Content-type: application/json');
$array['version']='0.1';
$array['pief']=gethostname();

echo json_encode($array);
