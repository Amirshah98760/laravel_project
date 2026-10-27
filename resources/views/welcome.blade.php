
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel CI/CD Deployment</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6fb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            background: #ffffff;
            width: 100%;
            max-width: 450px;
            padding: 35px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }

        .badge {
            display: inline-block;
            background: #e0e7ff;
            color: #4338ca;
            padding: 7px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        h1 {
            color: #1f2937;
            font-size: 26px;
            margin: 20px 0 10px;
        }

        p {
            color: #6b7280;
            font-size: 15px;
            line-height: 1.6;
        }

        .status {
            display: inline-block;
            margin: 15px 0;
            padding: 10px 18px;
            background: #dcfce7;
            color: #15803d;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .details {
            margin-top: 25px;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f1f1f1;
            font-size: 14px;
            gap: 15px;
        }

        .label {
            color: #6b7280;
        }

        .value {
            color: #374151;
            font-weight: bold;
            text-align: right;
        }

        .ok {
            color: #16a34a;
        }

        .fail {
            color: #dc2626;
        }

        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #9ca3af;
        }

        @media (max-width: 480px) {
            .container {
                padding: 25px 20px;
            }

            h1 {
                font-size: 23px;
            }
        }
    </style>
</head>
<body>

@php
    try {
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        $dbStatus = 'Connected';
        $dbOk = true;
    } catch (\Throwable $e) {
        $dbStatus = 'Disconnected';
        $dbOk = false;
    }
@endphp

<div class="container">

    <span class="badge">Laravel CI/CD</span>

    <h1>Deployment Successful!</h1>

    <p>The  application has been deployed successfully.</p>

    <div class="status">
        &#10003; Application is Running
    </div>

    <div class="details">

        <div class="row">
            <span class="label">Laravel Version</span>
            <span class="value">{{ app()->version() }}</span>
        </div>

        <div class="row">
            <span class="label">PHP Version</span>
            <span class="value">{{ PHP_VERSION }}</span>
        </div>

        <div class="row">
            <span class="label">Database</span>
            <span class="value {{ $dbOk ? 'ok' : 'fail' }}">
                {{ $dbStatus }}
            </span>
        </div>

    </div>

    <div class="footer">
        Powered by Laravel & GitHub Actions
    </div>

</div>

</body>
</html>