<? php

?>

<html lang="ja">
<head>
  <meta charset="UTF-8"
    name="viewport"
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
  />
  
  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/windinfospot.css')}}">
  
</head>
<body>
@extends('layaut')

@section('content')

<h1>{{ $spot->name }}</h1>

 
<!-- widguruここから -->
<div class='col-xs-12 col-md-12'>
  <div id='windguru' >
    <script id="{!! $spot->windguru_scr_id !!}">
      (function (window, document) {
      var loader = function () {
      var arg = ["{!! $spot->windguru_s !!}","m=3","{!! $spot->windguru_id !!}","wj=ms","tj=c","odh=0","doh=24","fhours=240","vt=forecasts","lng=en",
      "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
      var script = document.createElement("script");
      var tag = document.getElementsByTagName("script")[0];
      script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
      tag.parentNode.insertBefore(script, tag);
      };
      window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
      })(window, document);
    </script>

  </div>
</div>
<!-- windguruここまで -->

<!-- GPVここから -->
<div  class='col-xs-12 col-md-12'>
  <div id='gpv'>
    <h2>GPV</h2>
    
    <iframe src="http://weather-gpv.info/parts/bpm.php?model=msm&element=wa&latsc=0&w=300&h=450&area=kt&lx=461&ly=289" width=300 height=450 scrolling=NO frameborder=0 border=0 marginwidth=0 marginheight=0 style='border: 2px solid #4ec4d3'></iframe>
    <iframe src="http://weather-gpv.info/parts/bpm.php?model=cwm&element=wv&latsc=0&w=300&h=450&area=kt&lx=461&ly=289" width=300 height=450 scrolling=NO frameborder=0 border=0 marginwidth=0 marginheight=0 style='border: 2px solid #4ec4d3'></iframe>
  </div>
</div>
<!-- GPVここまで -->

<!-- herekiteここから -->

<form action='/windinfospot/{!! $spot->name_en !!}/button' method='POST' class="form-horizontal">
    @csrf
    <div class="rou herekite">
        <div class="button_status">     
	    <!-- どのスポットに行くか決まっていない場合ボタン表示  -->
	         @if( Auth::user()->spot_name == NULL )
	         <button class='btn btn-outline-default' type='submit' name='spot_name' value='{!! $spot->name_en !!}' >行く</button>
	    
	    <!-- スポットは決まっていてこれからはいる、もしくは取り消す場合  -->
	         @elseif( Auth::user()->spot_name == $spot->name_en && Auth::user()->status == NULL )     
	         <button class='btn btn-outline-default' type='submit' name='status' value ='playing'  >入る</button>
	         
	         <button class='btn btn-outline-default' type='submit' name='delete' >取り消し</button>
	         
	    <!-- スポットは海から上がった場合  -->    
	         @elseif(Auth::user()->spot_name == $spot->name_en && Auth::user()->status == 'playing' )
	         
	         <button class='btn btn-outline-default' type='submit' name='delete' >海から上がった</button>

	         @endif
	 </div>
    </div>
</form>

    

<div class='col-xs-12 col-md-12'>
    <div class="box5">
        <div class='allicon'>
            
            <style type="text/css">
                .name.status {
                    color: #4ec4d3;  
                }
             </style>

             @foreach ($users as $user)
                 <div class='user'>
                      <div class='icon'><img src="/storage/profile_images/{{ $user->id }}.jpg" width="55px" height="55px"></div>
                     <div class='name @if($user->status == 'playing') status @endif'>
                         {{ $user->name }}
                     </div>
                 </div>
             @endforeach
            
       </div>
    </div>
</div>

<!-- herekiteここまで -->
@endsection
</body>
</html>
