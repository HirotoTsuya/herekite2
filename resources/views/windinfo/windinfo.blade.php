<html lang="ja">
<head>
  <meta charset="UTF-8"
    name="viewport"
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
  />
  
  <!-- windyここから -->
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
  <script src="https://api4.windy.com/assets/libBoot.js"></script>
  <!-- windyここまで -->

  <link rel="stylesheet" href="{{ asset('assets/css/windinfo.css')}}">
  
</head>
<body>
@extends('layaut')

@section('content')
  <!-- windyここから -->
  <div id="windy"></div>
    <script src="{{ asset('/assets/js/windy.js') }}"></script>
     
  <!-- windyここまで -->

 
  
@endsection

</body>
</html>
