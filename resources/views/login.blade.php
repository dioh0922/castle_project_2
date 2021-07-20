@extends("layout")

@section("content")

  <body style="background-color: #eeeeff;">
    <div class="container">
      <h1>認証ページ</h1>

			<a href="./list"><button class="btn btn-primary">一覧表示へ</button></a>

      <form method="post" action="./loginCheck" enctype="multipart/form-data">
        {{csrf_field()}}
        <br>
        <div class="form-group">
          <label for="login_id">ユーザID</label>
          <input type="text" name="login_id">
        </div>

        <div class="form-group">
          <label for="login_pass">パスワード</label>
          <input type="password" name="login_pass">
        </div>

        <input type="submit" class="btn btn-danger">
      </form>

      @if(session("login_failed"))
        <div class="alt_success">
          <h3>{{session("login_failed")}}</h3>
        </div>
      @endif

    </div>
  </body>
	@endsection
</html>
