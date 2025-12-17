<?php
/**
 * Infinite MLM Software - Placeholder
 *
 * This is a placeholder page displayed while the actual
 * Infinite MLM software is being installed.
 */

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite MLM - Coming Soon</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .container {
            text-align: center;
            padding: 40px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, #00d9ff, #00ff88);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .status {
            font-size: 1.2rem;
            color: #888;
            margin-bottom: 2rem;
        }
        .info {
            background: rgba(255,255,255,0.1);
            padding: 20px 40px;
            border-radius: 10px;
            display: inline-block;
        }
        .info p { margin: 10px 0; color: #aaa; }
        .info strong { color: #00d9ff; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Infinite MLM Platform</h1>
        <p class="status">Coming Soon</p>
        <div class="info">
            <p><strong>Status:</strong> Awaiting software installation</p>
            <p><strong>Server:</strong> <?php echo gethostname(); ?></p>
            <p><strong>PHP:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Time:</strong> <?php echo date('Y-m-d H:i:s T'); ?></p>
        </div>
    </div>
</body>
</html>
