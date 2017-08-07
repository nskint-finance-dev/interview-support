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
			<?php echo $this->Form->create(null, [
				'url' => ['action' => 'add'],
				'type' => 'post',
				'class' => 'form-inline'
			]); ?>
				<div class="input-group col-md-5">
					<span class="input-group-addon">ユーザー名</span>
					<?php echo $this->Form->text('username', ['class' => 'form-control', 'placeholder' => 'ユーザー名を入力してください']);?>
				</div>
				<div class="input-group col-md-5">
					<span class="input-group-addon">パスワード</span>
					<?php echo $this->Form->password('password', ['class' => 'form-control', 'placeholder' => 'パスワードを入力してください']);?>
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
						<th>ユーザー名</th>
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