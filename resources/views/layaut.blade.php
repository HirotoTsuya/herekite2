<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>hereKite</title>
 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="padding-top:70px">
  <div class="container">
    <div class="row">

      <!-- ここからナビの記述 -->
      <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
         <a href="/windinfo" class="navbar-brand"><img src="/images/herekite_logo.png" width="190" height="auto" class="img-responsive"></a>
         <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
           <span class="navbar-toggler-icon"></span>
         </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav">
	    
            <li class="nav-item"><a href="/index" class="nav-link">ホーム</a></li>
            <li class="nav-item"><a href="/windinfo" class="nav-link">風情報</a></li>
          </ul>
          <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
                    
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                    <a class="dropdown-item" href="{{ route('logout') }}"
	                        onclick="event.preventDefault();
	                        document.getElementById('logout-form').submit();">
	                        {{ __('ログアウト') }}
	                    </a>

	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        @csrf
	                    </form>
	                    
	                    
	                    <a class="dropdown-item" href="/profile">プロフィール</a>
            
	                </div>
                
            </li>
            @endauth
            @guest
            <li class="nav-item"><a href="/login" class="nav-link">ログイン</a></li>
            <li class="nav-item"><a href="/register" class="nav-link">初めての方はこちら</a></li>
            @endguest
          </ul>
        </div>
      </nav>
      <!-- ここまでナビの記述 -->

      
      @yield('content')

    </div>
  </div>
  <footer class="footer"><!-- フッター -->
    <div class="container">
      <p class="text-muted text-center">&copy; hereKite</p>
    </div>
  </footer>
@section('endbody')
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@show
</body>
</html>