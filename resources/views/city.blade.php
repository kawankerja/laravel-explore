<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Nama</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS Kustom -->
  <style>
    /* CSS Kustom */
    /* Misalnya, memberikan warna latar belakang yang berbeda untuk setiap baris */
    .custom-table tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h2>Data Nama</h2>

  <form action="/city-import" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="import-excel">
    <button type="submit">import excel</button>
  </form>

  <table class="table table-bordered custom-table">
    <thead>
      <tr>
        <th>NO.</th>
        <th>Nama</th>
        <th>negara</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kota as $key)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $key->kota }}</td>
            <td>{{ $key->negara }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="mt-5 d-flex justify-centent-end">
    <a href="/export">export</a>
  </div>
</div>

<!-- jQuery dan Bootstrap JS (diperlukan untuk Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
