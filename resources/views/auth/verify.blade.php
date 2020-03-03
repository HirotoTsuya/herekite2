@extends('layaut')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">本登録</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            新しい本登録メッセージが送信されました。
                        </div>
                    @endif

                    メールアドレスの認証をお願いします。<br><br>
                    もしメールを受け取っていない場合は迷惑メールの確認をお願いします。<br>
                    そちらでも確認できない場合は<a href="{{ route('verification.resend') }}">ここをクリックすると再送信されます</a>。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection