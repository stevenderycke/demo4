<?php
header('Content-type: application/json');
$array['version']='0.1';
$array['hostname']=gethostname();

echo json_encode($array);
