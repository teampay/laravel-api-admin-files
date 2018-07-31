<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="//cdn.jsdelivr.net/npm/fingerprintjs2@1.8.0/dist/fingerprint2.min.js"></script>
</head>
<body>

@yield('content')

<script>
    new Fingerprint2().get(function(result, components) {
        console.log(result) // a hash, representing your device fingerprint
        console.log(components) // an array of FP components
      });
</script>
</body>
</html>