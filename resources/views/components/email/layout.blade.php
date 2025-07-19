<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">

    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('static-assets/img/favicon/favicon.png') }} " width="24px" height="24px" />

    <style>
        body {
            margin: 0;
        }
        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #edf2f7;
            margin: 0;
            padding: 0;
        }

        .main {
            background-color: #ffffff;
            margin: 0 auto;
            width: 100%;
            max-width: 600px;
            border-spacing: 0;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            color: #718096;
            padding: 32px 24px;
        }

        .header {
            width: 100%;
            text-align: center;
        }

        .header a {
            display: block;
            margin-bottom: 32px;
        }

        .subcopy {
            width: 100%;
            margin-bottom: 16px;
        }

        .url {
            color: rgb(37, 99, 235);
        }

        .footer {
            width: 100%;
            text-align: center;
        }

        .footer p {
            font-size: 12px;
        }

        .content {
            width: 100%;
        }

        .line {
            width: 100%;
        }

        .line p {
            /* font-size: 0.875rem; */
            margin: 0 0 16px 0;
            line-height: 2;
        }

        .greeting {
            font-weight: 500;
            letter-spacing: 0.05em;
        }

        .otp {
            width: 2.1rem;
            height: 2.1rem;
            display: inline-block;
            font-size: 1.2rem;
            line-height: 2.1rem;
            text-align: center;
            font-weight: 500;
            color: #00ad55;
            border: 1px solid #00ad55;
            border-radius: 0.375rem;
        }

        .otp-container {
            width: 100%;
            display: flex;
            column-gap: 0.35rem;
            margin-bottom: 16px;
        }

        .button {
            display: inline-block;
            margin-bottom: 16px;
            padding-inline: 1.25rem;
            padding-block: 0.75rem;
            font-size: 0.875rem;
            font-weight: 500;
            border-radius: 0.5rem;
            letter-spacing: 0.05em;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
            background-color: #00ad55;
            color: #ffffff;
            text-decoration: none;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        .button:hover {
            background-color: rgba(0, 173, 85, .7);
        }

        .button:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        /* @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        } */
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="main" width="100%" cellpadding="0" cellspacing="0">
            {{-- header --}}
            {{ $header }}

            {{-- content --}}
            {{ $slot }}

            <x-email.divider/>

            {{-- subcopy --}}
            {{ $subcopy ?? '' }}

            {{-- footer --}}
            {{ $footer }}
        </table>
    </center>
</body>
</html>
