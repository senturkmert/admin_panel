<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('resim-yukle')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label> Resim Seçiniz</label><br>
    <input type="file" name="resim"><br>
    <input type="submit" value="Yükle">
</form>

</body>
</html>
