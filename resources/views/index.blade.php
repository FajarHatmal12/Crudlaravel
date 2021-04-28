<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
    <style>
          
    </style>
</head>
<body style="background-color: grey;">>

    <h3 align="center" style="margin-top: 3%; margin-bottom: 3%;"><font color = "white">CRUD UNIVERSITAS BUMIGORA</h3>
    <div class="container">
    
    <a href="Ujian/create" class="btn btn-primary" style="box-shadow: 2px 2px 0 0 darkslategray;">Tambah Data</a>
        
        <table class="table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>Nama Dosen</th>
                <th>Jumlah Soal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($is as $isi)
            <tr style="background-color: white;">
                <td>{{ $isi->id }}</td>
                <td>{{ $isi->nama_mk }}</td>
                <td>{{ $isi->dosen }}</td>
                <td>{{ $isi->jumlah_soal }}</td>
                <td>{{ $isi->keterangan }}</td>
                <td>
                    <!-- <a href="Ujian/{{$isi->id}}" class="btn btn-danger">Hapus</a> </td> -->
                    <form action="Ujian/{{$isi->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn fa fa-trash btn-danger " onclick="return confirm('Anda yakin mau menghapus item ini?')">Hapus</button>
                            <a href="Ujian/{{$isi->id}}/edit" class="btn btn-primary">Edit</a>
                        </form>
                        
           
            
            </tr>
            
        @endforeach
        </tbody>
        </table>
        <marquee> <font color="white">Selamat datang di website kami | Fajar Agsa Hatmal (1810530165) </marquee>
 
    </div>
    <footer >
       </footer>
</body>
</html>
