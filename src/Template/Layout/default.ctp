<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        技術向上プロジェクト
    </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('interview-app-common.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<!-- Header -->
	<nav id="header" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">

			<!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- タイトルなどのテキスト -->
				<a class="navbar-brand" >技術向上プロジェクト</a>

			</div>

			<!-- グローバルナビの中身 -->
			<div class="collapse navbar-collapse" id="nav-menu">

				<!-- 各ナビゲーションメニュー -->
				<ul class="nav navbar-nav">
					<!-- 通常のリンク -->
					<li><a href="#">ビジネス基礎チェック表</a></li>
					<li><a href="#">金融図書館貸出管理</a></li>
					<li><?php echo $this->Html->link(
						'ユーザー管理', array(
							'controller' => 'users',
							'action' => 'index',
						)
					);?></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!-- ログイン情報 -->
					<li><p class="navbar-text">ようこそ <?= $this->request->session()->read('Auth.User.username'); ?> さん</p></li>
					<li><a href="/interview-support/users/logout">ログアウト</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
