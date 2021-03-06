<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        技術向上プロジェクト
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $this->Html->css('bootstrap.min.css') ?>
    <?php echo $this->Html->css('interview-app-common.css') ?>
    <?php echo $this->Html->css('cake.css') ?>
</head>
<body>
    <div id="body" class="container-fluid">
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

        <!-- ページタイトル -->
        <div class="page-header">
            <h2>技術向上プロジェクト</h2>
        </div>

        <?= $this->Flash->render() ?>
        <!-- 見出し-新規登録 -->
        <div class="page-caption">
            ログイン
        </div>
        <!-- Form -->
        <div class="row-fluid form-group">
            <!-- Form -->
            <?php echo $this->Form->create(null, [
                'url' => ['controller' => 'users', 'action' => 'login'],
                'type' => 'post',
                'class' => 'form-horizontal',
            ]); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">社員番号</label>
                    <div class="col-sm-5">
                        <?php echo $this->Form->text('id', ['class' => 'form-control', 'placeholder' => '社員番号を入力してください', 'maxLength' => '50', 'required' => true]);?>
                        <?php echo $this->Form->hidden('password',['value' => 'password']);?>
                    </div>
                </div>
                <div class="form-group">
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-7 p-left-15">
                        <button type="submit" class="btn btn-primary btn-lg">ログイン</button>
                    </div>
                </div>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</body>
</html>
