<?php
header('Content-Type: application/json');
date_default_timezone_set('UTC'); // Set timezone jika diperlukan
echo json_encode(['serverTime' => date('c')]);
