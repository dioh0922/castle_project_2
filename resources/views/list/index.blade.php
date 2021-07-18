@extends("layout")

@section("content")
<body>
		<div class="container bg-warning">
			<div class="page-header">
				<h1>100名城実績ページ</h1>
			</div>
			<input type="button" class="btn btn-danger" onclick="location.href='../../index.html'" value="Webアプリメインへ"><?php /* プロジェクト外まで(project/public/にいる) */ ?>
			<a href="./record"><button class="btn btn-primary">実績記録へ</button></a>
			<a href="./map"><button class="btn btn-success">地図表示</button></a>
			<br>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th><div class="text-center">城名</div></th>
							<th><div class="text-center">城スタンプ</div></th>
							<?php
							/*
							<th>100名城スタンプ</th>
							*/
							?>
						</tr>
					</thead>

					<tbody>

						@foreach($list as $data)
							@if($data->famus_exsist)
								<tr>
									<td><div class="text-center">{{$data->castle_name}}</div></td>
									<td><div class="text-center"><img src="{{asset($data->img_path)}}"></div></td>
									<?php
									/*
									<td><img src="{{asset($data->famus_img_path)}}"></td>
									*/
									?>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</body>
	@endsection
</html>
