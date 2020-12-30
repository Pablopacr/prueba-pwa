<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script>
    window.addEventListener("load", inicio);
    function inicio(){
      //navigator.geolocation.getCurrentPosition(alExito, alError);
      navigator.geolocation.watchPosition(alExito, alError)
    }
    function alExito(info){
      campoLatitud.value = info.coords.latitude;
      campoLongitud.value = info.coords.longitude;
      campoAltitud.value = info.coords.altitud;

    }
    function alError(){
      alert("Hubo un error");

    }
  </script>
</head>
<body>
  <button onClick="detener()">Detener</button>
  latitud: <input id="campoLatitud"/><br>
  longitud: <input id="campoLongitud"/><br>
  Altitud: <input id="campoAltitud"/><br>
</body>
</html>