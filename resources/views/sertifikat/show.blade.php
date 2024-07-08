<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('certificate/sertif.png'); /* Pastikan path gambar benar */
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
        .certificate-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }
        .certificate {
            position: relative;
            width: 22.2cm; /* Lebar sertifikat dalam cm */
            height: 15.7cm; /* Tinggi sertifikat dalam cm */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column; /* Ubah ke vertikal */
        }
        .no-certificate {
            position: absolute;
            top: 20px; /* Sesuaikan dengan jarak dari atas yang diinginkan */
            text-align: center;
            width: 100%;
            color: white;
            font-weight: bold;
            font-family: 'Droid Serif';
        }

        .no-certificate h1 {
            font-size: 63px;
            font-weight: bold;
        }
        .no-certificate h2 {
            font-size: 23px;
            color:rgb(236, 215, 141);
            font-weight: bold;
        }
        .no-certificate p {
            font-size: 17.7px;
            font-weight: bold;
        }
        .no-certificate .barlow {
            margin-top: 5px;
            font-size: 20.7px;
            font-family: 'barlow';
            font-weight: bold;
        }

        .no-certificate h1, .no-certificate h2, .no-certificate p {
            margin: 0;
        }
        .certificate-content {
            max-width: 80%; /* Lebar maksimum konten sertifikat */
            color: white;
        }
        .certificate-title {
            padding-top: 10px;
        }
        .certificate-title p {
            margin: 0px;
            color: white;
            font-size: 2em;
            font-weight: bold;
        }
        .certificate-title hr {
            color: white;
            width: 50%;
            border: 0;
            height: 1px;
            margin: 0 auto;
        }
        .certificate-body {
            font-size: 18px;
            margin-top: 10px; /* Sesuaikan jarak antara judul dan isi konten */
        }
        .t-bold {
            font-weight: bold;
        }
        .on-date {
            font-size: 18px;
            font-weight: bold;
            color: rgb(236, 215, 141);
            margin-top: 20px; /* Sesuaikan jarak antara konten dan tanggal */
        }
        .download-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="certificate-container" id="certificate">
        <div class="certificate">
            <div class="no-certificate">
                <h1>SERTIFIKAT</h1>
                <h2>PENGHARGAAN</h2>
                <p>NO: <span>{{ $key['certificate_number']}}</span> </p>
                <p class="barlow">Diberikan kepada</p>
            </div>
            <div class="certificate-content">
                <div class="certificate-title">
                    <p>{{$key['name']}}</p>
                    <hr color="white">
                    <div class="certificate-body">
                        Atas partisipasinya sebagai peserta magang dengan role <span class="t-bold">{{$key['role']}} </span> <br>
                        dari <span class="t-bold">{{ $key['start_date']}} </span>sampai <span class="t-bold">{{$key['end_date']}}</span> dan dinyatakan kompeten di PT. Kawan Kerja Indonesia
                        <div class="on-date">
                            <strong>{{$key['date']}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="download-btn">
        <form action="{{route('sertifikate.create')}}" method="POST">
            @csrf
            <button type="submit">Download</button>
        </form>
    </div>
</body>
</html>
