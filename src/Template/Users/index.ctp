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
            <?php echo $this->Form->create($user, [
                'url' => ['action' => 'add'],
                'type' => 'post',
                'class' => 'form-horizontal'
            ]); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ユーザー</label>
                    <div class="col-sm-5">
                        <?php echo $this->Form->text('username', ['class' => 'form-control', 'placeholder' => 'ユーザー名を入力してください', 'maxLength' => '50', 'required' => true]);?>
                    </div>
                    <div class="error-message col-sm-12">
                        <?php echo $this->Form->error('username');?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">パスワード</label>
                    <div class="col-sm-5">
                        <?php echo $this->Form->password('password', ['class' => 'form-control', 'placeholder' => 'パスワードを入力してください', 'maxLength' => '50', 'required' => true]);?>
                    </div>
                    <div class="error-message col-sm-12">
                        <?php echo $this->Form->error('password');?>
                    </div>
                </div>
                <div class="col-sm-offset-11">
                    <button type="submit" class="btn btn-primary btn-md">登録</button>
                </div>
            <?php echo $this->Form->end() ?>
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