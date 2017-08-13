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
    <?php echo $this->Html->css('cake.css') ?>
    <?php echo $this->Html->css('bootstrap.min.css') ?>
    <?php echo $this->Html->css('interview-app-common.css') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min') ?>
    <?php echo $this->Html->script('jquery.smooth-scroll.min') ?>
    <?php echo $this->Html->script('jquery.smooth-scroll.customize') ?>
</head>
<body>
    <!-- Header -->
    <nav id="header" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">

            <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMenu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- タイトルなどのテキスト -->
                <a class="navbar-brand" >技術向上プロジェクト</a>

            </div>

            <!-- グローバルナビの中身 -->
            <div class="collapse navbar-collapse" id="navMenu">

                <!-- 各ナビゲーションメニュー -->
                <ul class="nav navbar-nav">
                    <!-- 通常のリンク -->
                    <li><?php echo $this->Html->link(
                        'ビジネス基礎チェック', array(
                            'controller' => 'CheckResult',
                            'action' => 'index',
                        )
                    );?></li>
                    <li><a href="#">金融図書館貸出管理</a></li>
<!--                     <li><?php echo $this->Html->link(
                        'ユーザー管理', array(
                            'controller' => 'Users',
                            'action' => 'index',
                        )
                    );?></li> -->
                </ul>

                <!-- ログイン情報 -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->request->session()->read('Auth.User.username'); ?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><?php echo $this->Html->link(
                                'ログアウト', array(
                                'controller' => 'users',
                                'action' => 'logout',
                                )
                            );?></li>
                        </ul>
                    </li>
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
