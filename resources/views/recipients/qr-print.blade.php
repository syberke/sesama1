<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <title>QR Code - {{ $recipient->qr_code }}</title>
    <style>
      body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 40px;
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
}

        .qr-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 340px;
            overflow: hidden;
            text-align: center;
            padding: 30px 25px;
        }
        .header {
            font-size: 20px;
            font-weight: 700;
            color: #0071BC;
            margin-bottom: 4px;
        }
        .sub-header {
            font-size: 13px;
            color: #555;
            margin-bottom: 20px;
        }
        .qr-code img {
            border: 3px solid #0071BC;
            border-radius: 8px;
            padding: 10px;
            background: #fff;
        }
        .qr-text {
            font-size: 16px;
            font-weight: 600;
            margin: 15px 0 20px 0;
            color: #333;
            letter-spacing: 1px;
        }
        .recipient-info {
            text-align: left;
            margin-bottom: 15px;
        }
        .recipient-info table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }
        .recipient-info tr:nth-child(odd) {
            background: #f9f9f9;
        }
        .recipient-info td {
            padding: 6px 8px;
            vertical-align: top;
        }
        .recipient-info td:first-child {
            font-weight: 600;
            width: 40%;
            color: #444;
        }
        .footer {
            font-size: 11px;
            color: #888;
            border-top: 1px dashed #ccc;
            padding-top: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="qr-container">
        <div class="header">BAZMA PERTAMINA</div>
        <div class="sub-header">Menebar Kebermanfaatan</div>

        <div class="qr-code">
            <img src="data:image/png;base64,{{ base64_encode(   QrCode::format('png')->size(150)->generate($recipient->qr_code)) }}" alt="QR Code">
        </div>

        <div class="qr-text">{{ $recipient->qr_code }}</div>

        <div class="recipient-info">
            <table>
                <tr>
                    <td>Nama Anak</td>
                    <td>{{ $recipient->child_name }}</td>
                </tr>
                <tr>
                    <td>Ayah</td>
                    <td>{{ $recipient->Ayah_name }}</td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>{{ $recipient->Ibu_name }}</td>
                </tr>
                <tr>
                    <td>Sekolah</td>
                    <td>{{ $recipient->school_name }}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>{{ $recipient->class }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            Scan QR ini saat penyaluran bantuan<br>
            Program Cilincing - Jakarta Utara
        </div>
    </div>
</body>
</html>
