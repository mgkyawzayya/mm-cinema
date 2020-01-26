<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<div class="visible-print text-center">
  <h1>Laravel 5.8 - QR Code Generator Example</h1>

  {!! QrCode::size(250)->generate('kyawzayya.me'); !!}

  <p>example by KyawZayya</p>
</div>

</body>
</html>
