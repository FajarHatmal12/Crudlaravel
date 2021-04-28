

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .tab{
        margin-left: 25%;
        margin-right: 25%;
    }
    .input{
        width: 600px;
        align-content: center;
        margin-left: 30px;
    }
    .label{
        margin-left: 30px;
    }
    .card{
        background-color: floralwhite;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    </style>

</head>
<body style="background-color: grey;">
    <h3 align="center" style="margin-top: 3%; margin-bottom: 3%;"><font color ="white">CRUD UNIVERSITAS BUMIGORA</font></h3>

    <div class="tab">
        <div class="card">
            <form action="/Ujian" method="post">
                    @csrf
                    <!-- <div class="mb-3">
                    <label for="id" class="form-label label">ID</label>
                    <input type="id" class="form-control input" id="id" name="id" value="{{old('id')}}">
                            @error('id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>   -->
                    <div class="mb-3">
                    <label for="id" class="form-label label">Mata Kuliah</label>
                    <input type="nama_mk" class="form-control input" id="nama_mk" name="nama_mk" value="{{old('nama_mk')}}">
                            @error('nama_mk')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Dosen</label>
                    <input type="dosen" class="form-control input" id="dosen" name="dosen" value="{{old('dosen')}}">
                            @error('dosen')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Jumlah Soal</label>
                    <input type="id" class="form-control input" id="jumlah_soal" name="jumlah_soal" value="{{old('jumlah_soal')}}">
                            @error('jumlah_soal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Keterangan</label>
                    <input type="keterangan" class="form-control input" id="keterangan" name="keterangan" value="{{old('keterangan')}}">
                            @error('keterangan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>  
                    <button type="submit" class="btn btn-secondary label">Simpan</button>
        </div>
        <marquee> <font color="white">Selamat datang di website kami | Fajar Agsa Hatmal (1810530165) </marquee>
    </div>
</body>
</html>


