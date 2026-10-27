<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel CI/CD - v2</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #eef2ff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background: white;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    max-width: 520px;
}

h1 { color: #4f46e5; }
p { color: #555; font-size: 18px; }
.status { color: green; font-weight: bold; }
.badge {
    display: inline-block;
    background: #4f46e5;
    color: white;
    padding: 4px 14px;
    border-radius: 20px;
    font-size: 14px;
}
table { margin: 20px auto 0; border-collapse: collapse; width: 100%; }
td { padding: 8px 12px; border-bottom: 1px solid #eee; font-size: 15px; text-align: left; }
td:first-child { color: #888; width: 45%; }
.ok { color: green; font-weight: bold; }
.fail { color: #e3342f; font-weight: bold; }
</style>
</head>
<body>

@php
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        $dbStatus = 'Connected';
        $dbOk = true;
    } catch (\Throwable $e) {
        $dbStatus = 'Not connected';
        $dbOk = false;
    }
@endphp

<div class="container">
    <span class="badge">Version 2</span>
    <h1>Deployed by the pipeline!</h1>

    <p class="status">CI/CD Deployment Successful!</p>
    <p>This page was updated automatically using GitHub Actions and AWS EC2.</p>

    <table>
        <tr><td>Last updated</td><td>{{ date('Y-m-d H:i:s') }}</td></tr>
        <tr><td>Server name</td><td>{{ gethostname() }}</td></tr>
        <tr><td>PHP version</td><td>{{ PHP_VERSION }}</td></tr>
        <tr><td>Laravel version</td><td>{{ app()->version() }}</td></tr>
        <tr><td>Database</td><td class="{{ $dbOk ? 'ok' : 'fail' }}">{{ $dbStatus }}</td></tr>
    </table>
</div>

</body>
</html>