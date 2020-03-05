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

<div = class="status">  
<div class='box5 col-xs-12 col-md-12'>
    <style type="text/css">
        .name.status {
            color: #4ec4d3;  
        }
     </style>
     <div>
         あなたのステータス:
         <?php 
             if(Auth::user()->spot_name == NULL){
                echo "選択されていません";
             }elseif(Auth::user()->spot_name !== NULL ){
                 $name = Auth::user()->spot_name;
                 $spot = DB::table('spot')->where('name_en',$name)->value('name');
                 echo  $spot;
             }
         ?>
        </div>
    </div>
</div>
</div>

 
  
@endsection

</body>
</html>
