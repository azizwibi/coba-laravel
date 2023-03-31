<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<p>status code:{{ $statusCode }}</p>
<h1>halaman get API raja ongkir </h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-5">
        </div>
        <div class="col-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">PROVINSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($provinsi as $p)
                    <tr>

                        <td>{{ $p['province_id'] }}</td>
                        <td>{{ $p['province'] }}</td>
                    </tr>
                   @endforeach
                </tbody>
              </table>
        </div>
    </div>



</div>



</body>
</html>
