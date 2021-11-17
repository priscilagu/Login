{{-- inicio header --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
        .header-b {
            background-color:Aqua
        }
        .nav-b {
            background-color:Lime
        }
        .content-b{
            background-color:Red
        }
        .footer-b {
            background-color:Yellow
        }
    </style>
</head>
<body class="header-b">
    <div>
    Te quiero 3000
</div>
{{-- FIN header --}}
{{-- inicio nav --}}
<nav class="nav-b">
    <ul>
        Yo soy Groot
        <br>
        Yo soy Iron Man
    </ul>
</nav> 
{{-- FIN nav --}}
{{-- inicio content --}}
<form action="{{route('login')}}" method="POST">
<div class=”mb-3”>
      <label for=”inusuario” class=”form-label”> Usuario</label>
      <input type=”text” class=”form-control” id=”inusuario” > 
</div>
<div class=”mb-3”>
      <label for=”incontraseña” class=”form-label”> Contraseña </label>
      <input type=”text” class=”form-control” id=”incontraseña” > 
</div>
<button type=”submit” class=”btn btn-primary”> Submit </button>
</form>

<div class="content-b">
    Wakanda Forever
</div>
{{-- Fin content --}}
{{-- Inicio footer --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
<footer class="footer-b">
    Señor Stark! Ganamos, lo logró, señor. Lo logró
</footer>
</html>
{{-- FIN footer --}}