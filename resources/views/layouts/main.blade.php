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
    var options = {
        excludeAudio: true,
        excludeCanvas: true,
        excludeWebGLVendorAndRenderer: true,
        excludeJsFonts: true,
        excludeFlashFonts: true,
        excludeWebGL: true,
        excludeSessionStorage: true,
        excludeColorDepth: true,
        excludeAdBlock: true,
        excludeHardwareConcurrency: true,
        excludeOpenDatabase: true,
        excludeHardwareConcurrency: true,
    }
    new Fingerprint2(options).get(function(result, components) {
        console.log(result) // a hash, representing your device fingerprint
        console.log(components) // an array of FP components
      });
</script>
</body>
</html>