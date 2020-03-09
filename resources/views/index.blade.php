@extends('layaut')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css')}}">
</head>
@section('content')
{{-- content body --}}
 
 
  <div class='center'>
    <div class="card-deck mb-2 mt-5"> <!-- サムネール -->
      <div class="card">
        <div class="card-body">
          <img src="{{ asset('images/windinfo_index.png') }}" class="card-img mb-2 ">
          <div class="caption">
            <h3 class="card-title">風情報</h3>
            <p class="card-text">複数の風情報を一覧で見れることでより多くの情報が得られます。</p>
            <div class="d-flex justify-content-center">
              <a href='/windinfo'>
                <button class="btn btn-outline-default " data-toggle="modal"> <!-- モーダル -->
                  風情報を見る
                </button>
              </a>
            </div> <!-- モーダル -->
          </div>
        </div>
      </div>
 
      <div class="card">
        <div class="card-body">
          <img src="{{ asset('images/herekite_index.png') }}" class="card-img mb-2">
          <div class="caption">             
            <h3 class="card-title">hereKite</h3>
            <p class="card-text">カイトをしている人がマップ上ででわかるようにしました</p>
            <div class="d-flex justify-content-center">
              <a href='/windinfo'>
                <button class="btn btn-outline-default" data-toggle="modal"> <!-- モーダル -->
                  hereKiteを見る
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- サムネール -->
  </div>
@stop

@section('endbody')
@parent
<script>
jQuery(function($) {
  // jQueryの処理
});
</script>
@stop