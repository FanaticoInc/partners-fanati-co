<?php
/**
 * Health Check Endpoint
 *
 * Returns JSON status for container health monitoring.
 */

header('Content-Type: application/json');
http_response_code(200);

echo json_encode([
    'status' => 'ok',
    'service' => 'infinite-mlm',
    'timestamp' => date('c'),
    'php_version' => phpversion(),
    'placeholder' => true,
    'message' => 'Awaiting software installation'
]);
