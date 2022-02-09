<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İletisim Formu</title>
</head>
<body>
<form action="{{route('iletisim-sonuc')}}" method="post">
@csrf
    <label>Ad Soyad</label> <br>
    <input type="text" name="adsoyad"><br>
    <label>Mail</label> <br>
    <input type="text" name="mail"><br>
    <label>Telefon</label> <br>
    <input type="text" name="telefon"><br>
    <label>Mesaj</label><br>
    <textarea name="metin" style="width: 300px; height: 200px;"></textarea><br>
    <input type="submit" value="Gönder">
</form>

</body>
</html>
