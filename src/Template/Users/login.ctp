<!DOCTYPE html>
<html>
<head>
<head>
    <?= $this->Html->charset() ?>
    <title>
        技術向上プロジェクト
    </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('interview-app-common.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<div id="body" class="container-fluid">
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

		<!-- ページタイトル -->
		<div class="page-header">
			<h2>技術向上プロジェクト</h2>
		</div>

		<!-- 見出し-新規登録 -->
		<div class="page-caption">
			ログイン
		</div>
		<!-- Form -->
		<div class="row-fluid form-group">
			<!-- Form -->
			<?php echo $this->Form->create(null, [
				'url' => ['action' => 'login'],
				'type' => 'post',
				'class' => 'form-horizontal'
			]); ?>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="user">ユーザー</label>
					<div class="col-sm-3">
						<?php echo $this->Form->text('username', ['class' => 'form-control', 'placeholder' => 'ユーザー名を入力してください']);?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="InputPassword">パスワード</label>
					<div class="col-sm-3">
						<?php echo $this->Form->password('password', ['class' => 'form-control', 'placeholder' => 'パスワードを入力してください']);?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4">
						<button type="submit" class="btn btn-primary btn-lg">ログイン</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
