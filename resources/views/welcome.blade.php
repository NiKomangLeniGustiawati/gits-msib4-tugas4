<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mvc-leni</title>
</head>
<body>
    <div class = "container-fluid row col-12 card ">
    <div class ="card-body">
    <br>
    <table class = "table table-bordered table-striped">
        
    <thread>
       <tr><h3>Data Mahasiswa</h3></tr>
       <tr>
       <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jurusan</th>
       </tr>
       </thread>
       <tbody>

                <?php $no=1;?>
                @foreach ($datamahasiswa as $data)
                    <tr>
                    <th>{{ $no++}}</th>
                        <td>{{$data->nim }}</td>
                        <td>{{$data->nama }}</td>
                        <td>{{$data->jurusan }}</td>
                    </tr>
                @endforeach
</tbody>
</table>
    </div>
    </div>
</body>
</html>