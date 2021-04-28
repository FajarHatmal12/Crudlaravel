

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
            <form action= "/Ujian/{{$is->id}}/" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <label for="id" class="form-label label">ID</label>
                    <input type="id" class="form-control input" id="id" name="id" 
                        value="{{old('id') ? old('id') : $is->id}}" disabled>
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Mata Kuliah</label>
                    <input type="nama_mk" class="form-control input" id="nama_mk" name="nama_mk" 
                        value="{{old('nama_mk') ? old('nama_mk') : $is->nama_mk}}">
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Dosen</label>
                    <input type="dosen" class="form-control input" id="dosen" name="dosen" 
                        value="{{old('dosen') ? old('dosen') : $is->dosen}}">
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Jumlah Soal</label>
                    <input type="id" class="form-control input" id="jumlah_soal" name="jumlah_soal" 
                        value="{{old('jumlah_soal') ? old('jumlah_soal') : $is->jumlah_soal}}">
                    </div>  
                    <div class="mb-3">
                    <label for="id" class="form-label label">Keterangan</label>
                    <input type="keterangan" class="form-control input" id="keterangan" name="keterangan" 
                        value="{{old('keterangan') ? old('keterangan') : $is->keterangan}}">
                    </div>  
                    <button type="submit" class="btn btn-secondary">Simpan Perubahan</button>
        </div>
        <marquee> <font color="white">Selamat datang di website kami | Fajar Agsa Hatmal (1810530165) </marquee>
    </div>
</body>
</html>


