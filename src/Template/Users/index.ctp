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
			<form class="form-inline" action="/interview-support/users/add" method="POST">
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


		<!-- 一覧見出し -->
		<div class="page-caption">
			ユーザー一覧
		</div>

		<!-- ページ送り -->
		<div class="pagenator">
			<?= $this->Paginator->first('最初'); ?>
			<?= $this->Paginator->numbers(['modulus' => 2]); ?>
			<?= $this->Paginator->last('最後'); ?>
		</div>

		<!-- 一覧 -->
		<div class="row-fluid">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>ユーザー</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($users as $user): ?>
					<tr>
						<td><?php echo h($user['username']); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>