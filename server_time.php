<?php
header('Content-Type: application/json');
echo json_encode(['serverTime' => date('c')]);
