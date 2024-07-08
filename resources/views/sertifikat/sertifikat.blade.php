<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        @page {
    size: landscape;
}

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            background-image: url('certificate/sertif.png');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
        .certificate-container {
            width: 29.7cm;
            /* width: 1124.46px;
            height: 793.8px; */
            height: 21cm;
            display: table;
            margin: 0 auto;
            /* background-color: black; */
        }
        .certificate {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            width: 100%;
            height: 100%;
            /* background-color: black; */
        }
        .no-certificate {
            width: 100%;
            position: relative;
            color: white;
            font-weight: bold;
            font-family: 'Droid Serif';
            /* margin-left: 50px; */
            margin-bottom: 90px;
            /* background-color: black; */
        }
        .no-certificate h1 {
            font-size: 70px;
            font-weight: bold;
            /* margin-bottom: 150px; */
        }
        .no-certificate h2 {
            font-size: 23px;
            color: rgb(236, 215, 141);
            font-weight: bold;
            margin-bottom: 0px;
            margin-top: 10px;
        }
        .no-certificate p {
            font-size: 17.7px;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 0px;

        }
        .no-certificate .barlow {
            margin-top: 20px;
            font-size: 20.7px;
            font-family: 'barlow';
            font-weight: bold;
        }
        .certificate-content {
            max-width: 100%;
            margin: 0 auto;
            color: white;
            /* background-color: red; */
            /* margin-left: 50px; */
            margin-top: 0px;
            margin-bottom: 230px;
        }
        .certificate-title {
            padding-top: 10px;
            /* background-color: pink; */
        }
        .certificate-title p {
            margin: 0px;
            font-size: 2em;
            font-weight: bold;

        }
        .certificate-title hr {
            width: 50%;
            border: 0;
            height: 1px;
            background-color: white;
            margin: 20px auto 10px auto;
        }
        .certificate-body {
            font-size: 20px;
            margin-top: 10px;
        }
        .t-bold {
            font-weight: bold;
        }
        .on-date {
            font-size: 20px;
            font-weight: bold;
            color: rgb(236, 215, 141);
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <div class="certificate">
            <div class="no-certificate">
                <h1>SERTIFIKAT</h1>
                <h2>PENGHARGAAN</h2>
                <p>NO: <span>{{ $key['certificate_number']}}</span> </p>
                <p class="barlow">Diberikan kepada</p>
            </div>
            <div class="certificate-content">
                <div class="certificate-title">
                    <p>{{ $key['name'] }}</p>
                    <hr>
                    <div class="certificate-body">
                        Atas partisipasinya sebagai peserta magang dengan role <span class="t-bold">{{ $key['role'] }}</span><br>
                        dari <span class="t-bold">{{ $key['start_date'] }} sampai {{ $key['end_date'] }}</span> dan dinyatakan kompeten di PT. Kawan Kerja <br> Indonesia
                    </div>
                    <div class="on-date">
                        <strong>{{ $key['date'] }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
