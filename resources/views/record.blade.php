@extends("layout")

@section("content")

  <body style="background-color: #eeeeff;">
    <div class="container ">
      <h1>追記ページ</h1>

      <p>・城名はセレクトボックスから選択すること</p>

			<a href="./list"><button class="btn btn-primary">一覧表示へ</button></a>

			<a href="./logout"><button class="btn btn-info">ログアウト</button></a>

      <form method="post" action="./imgUpload" enctype="multipart/form-data">
        {{csrf_field()}}
        <br>
        <div class="form-group">
          <label for="stamp_img">城独自スタンプ画像</label>
          <input type="file" name="photo" id="stamp_img">
        </div>

<!---
        <div class="form-group">
          <label for="famus_img">100名城スタンプラリー画像</label>
          <input type="file" name="famus" id="famus_img">
        </div>
--->

        <div class="form-group">
          <label for="castle_name">城名</label>
          <select name="name" id="castle_name">
            @foreach($list_data as $data)
              <option value="{{$data->name}}">{{$data->name}}</option>
            @endforeach
          </select>
        </div>
        <input type="submit" class="btn btn-danger">
      </form>



      @if($errors->any())
        <div class="alt_denger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @if(session("success"))
        <div class="alt_success">
          {{session("success")}}
        </div>
      @endif

    </div>
  </body>
@endsection
</html>
