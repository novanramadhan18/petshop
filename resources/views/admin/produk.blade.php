<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Produk A</p>
    <p>Produk B</p>
    <p>Produk C</p>
    <a href="{{route('adm-add-produk')}}">tambah bang</a>
    <p>{{$produk}}</p>
    <p>{{$kategori}}</p>
</body>
</html>