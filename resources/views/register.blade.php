<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isi-masyarakat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
@include('layouts.navbar')
    <br>
    <br>
    <h3 style="text-align:center;">{{$register}}</h3>
        <form action="regis" method="POST" enctype="multipart/from-data">
            <div class="container">
                @method("POST")
                @csrf
                <div class="mb-3">
                    <label for="exampleFromControlTextarea1" class="col-from-label">Nama</label>
                    <input class="from-control" type="text" name="nik" aria-label="default input example">
                </div>


                <div class="mb-3">
                    <label for="exampleFromControlTextarea1" class="col-from-label">Nama</label>
                    <input class="form-control" typpe="text" name="nama" aria-label="default input example">
                </div>

                <div class="mb-3">
                    <label for="exampleFromControlTextarea1" class="col-from-label">Username</label>
                    <input class="form-control" typpe="text" name="username" aria-label="default input example">
                </div>

                <div class="mb-3">
                    <label for="inputPassword5" class="from-label">Password</label>
                    <input type="password" nama="password" id="inputpassword5" class="from-control"aria-describedy="passwordHelpBlock">
                </div>

                <div class="mb-3">
                    <label for="exampleFromControlTextarea1" class="col-from-label">No telp</label>
                    <input class="form-control" typpe="text" name="telp" aria-label="default input example">
                </div>

                 <br>
                <input class="btn btn-primary" type="submit" value="Daftar">
        </form>
</body>
</html>        

   