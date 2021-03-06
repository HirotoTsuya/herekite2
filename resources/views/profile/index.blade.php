<html lang="ja">
<head>
    <meta charset="UTF-8"
        name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
  />
</head>

<body>
@extends('layaut')

	@if ($errors->any())
	<div class="alert alert-danger">
	    <ul>
	    @foreach ($errors->all() as $error)
	        <li>{{ $error }}</li>
	    @endforeach
	    </ul>
	</div>
	@endif


	@if (session('success'))
	<div class="alert alert-success">
	    {{ session('success') }}
	</div>
	@endif


	@if ($is_image)
	<figure>
	    <img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px" height="100px">
	    <figcaption>現在のプロフィール画像</figcaption>
	</figure>
	@endif


	<form method="POST" action="/profile" enctype="multipart/form-data" >
	    {{ csrf_field() }}
	    <input type="file" name="photo">
	    <input type="submit">
	</form>
	
	

</body>

