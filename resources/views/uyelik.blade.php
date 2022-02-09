<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Üye Kayıt Formu</title>
</head>
<body>
@if($errors->any())
    <ul>
    @foreach($errors->all() as $hatalar)
        <li>{{$hatalar}}</li>
    @endforeach
        </ul>
@endif
<form action="{{route('uyekayit')}}" method="post">
@csrf
    <label>Ad Soyad</label> <br>
    <input type="text" name="adsoyad" placeholder="min 3 max 50 karakter"><br>
    <label>Mail</label> <br>
    <input type="text" name="mail"placeholder="deneme@gmail.com"><br>
    <label>Telefon</label> <br>
    <input type="text" name="telefon" placeholder="555-555-555"><br>
    <input type="submit" value="Gönder">
</form>

</body>
</html>
