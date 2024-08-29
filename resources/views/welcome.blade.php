<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Tailwind CSS */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }
        ::after, ::before {
            --tw-content: '';
        }
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal;
        }
        body {
            margin: 0;
            line-height: inherit;
        }
        .flex {
            display: flex;
        }
        .justify-center {
            justify-content: center;
        }
        .mt-8 {
            margin-top: 2rem;
        }
        .bg-yellow-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 252 232 / var(--tw-bg-opacity));
        }
        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px 0 rgb(0 0 0 / 0.06);
            box-shadow: var(--tw-shadow);
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .p-6 {
            padding: 1.5rem;
        }
        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
        .font-semibold {
            font-weight: 600;
        }
        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity));
        }
        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }
    </style>
</head>
<body>
    <div class="flex justify-center">
        <!-- SVG Logo -->
    </div>
    
    <!-- Biodata -->
    <div class="mt-8 bg-yellow-100 overflow-hidden shadow rounded-lg">
        <div class="p-6">
            <h2 class="text-2xl font-semibold text-gray-900">Biodata</h2>
            <table class="mt-4 text-gray-600">
                <tr>
                    <td><strong>Nama:</strong></td>
                    <td>Rifqi Sabilillah</td>
                </tr>
                <tr>
                    <td><strong>Tempat/Tanggal Lahir:</strong></td>
                    <td>Malang/26-Agustus-2004</td>
                </tr>
                <tr>
                    <td><strong>Alamat:</strong></td>
                    <td>Bareng Kulon 930a</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>rifqisabililah00@gmail.com</td>
                </tr>
                <tr>
                    <td><strong>Nomor Telepon:</strong></td>
                    <td>081654979684</td>
                </tr>
                <tr>
                    <td><strong>Pekerjaan:</strong></td>
                    <td>Mahasiswa</td>
                </tr>
                <tr>
                    <td><strong>Hobi:</strong></td>
                    <td>Bermain PS</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
