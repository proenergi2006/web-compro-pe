<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Terima Kasih Telah Menghubungi PT. Pro Energi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
            background: white;
        }
        .logo img {
            max-width: 100px;
        }
        h2 {
            color: #ea8a4a;
        }
        p {
            line-height: 1.6;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;
            padding-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
          <img src="https://proenergi.com/wp-content/uploads/2017/03/pe-logo.png" alt="">
        </div>

        <h5>From : {{ $data['name'] }} |  {{ $data['email'] }}</h5>
        <h5>Subject : {{ $data['subject'] }} </h5>

        <p>
            Message: <br>
            {{ $data['message'] }}
        </p>

        <p>{{__('message.this')}}<a href="www.proenergi.com">www.proenergi.com</a></p>

        {{-- <div class="footer">
            &copy; {{ date('Y') }} Pro Energi. Email ini dikirim secara otomatis, mohon tidak membalas langsung.
        </div> --}}
    </div>
</body>
</html>
