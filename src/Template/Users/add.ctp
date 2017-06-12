<!DOCTYPE html>
<html lang="ja">
<body>
	<div id="body" class="container-fluid">

		<!-- ページタイトル -->
		<div class="page-header">
			<h2>ユーザー管理</h2>
		</div>
		<!-- 見出し-新規登録 -->
		<div class="page-caption">
			ユーザー登録
		</div>
		<div class="row-fluid">
			<!-- Form -->
			<form class="form-inline" action="add" method="POST">
				<div class="input-group col-md-5">
					<span class="input-group-addon">ユーザー</span>
					<input type="text" class="form-control" name="username" placeholder="ユーザー">
				</div>
				<div class="input-group col-md-5">
					<span class="input-group-addon">パスワード</span>
					<input type="password" class="form-control" name="password" placeholder="パスワード">
				</div>
				<button type="submit" class="btn btn-primary btn-md">登録</button>
			</form>
		</div>
		

		<!-- 一覧 -->
		<div class="page-caption">
			ユーザー一覧
		</div>

		<div class="row-fluid">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>ユーザー</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>naganuma</td>
					</tr>
					<tr>
						<td>naganuma</td>
					</tr>
					<tr>
						<td>naganuma</td>
					</tr>
					<tr>
						<td>naganuma</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>