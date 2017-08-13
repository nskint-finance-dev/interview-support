<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\CheckResult[]|\Cake\Collection\CollectionInterface $checkResult
  */
?>
<!-- CheckResult.index -->
<div id="body" class="container-fluid">

    <!-- ページタイトル -->
    <div class="page-header">
        <h2>ビジネス基礎チェック 一覧</h2>
    </div>

    <!-- 見出し-新規登録 -->
    <div class="page-caption">
        新規登録
    </div>
    <!-- ボタン -->
    <div class="row-fluid">
            <?php echo $this->Html->link(
                    'チェックを始める',
                    array('action' => 'add'),
                    array('class' => 'btn btn-primary btn-lg')
            );?>
    </div>

    <div class="row-fluid">
        <!-- 見出し-検索条件 -->
        <div class="page-caption">
            検索条件
        </div>
        <!-- 検索条件 -->
        <form class="form-inline" action="#">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">実施者</span>
                    <select class="form-control" id="InputSelect">
                        <?php foreach($users as $user): ?>
                            <option><?php echo h($user);?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">検索</button>
        </form>
    </div>


    <!-- 一覧 -->
    <div class="page-caption">
        一覧
    </div>

    <!-- ページ送り -->
    <div class="row-fluid pull-right">
        <div class="pagination">
            <?php echo $this->Paginator->first('最初'); ?>
            <?php echo $this->Paginator->numbers(['modulus' => 2]); ?>
            <?php echo $this->Paginator->last('最後'); ?>
        </div>
    </div>

    <div class="row-fluid">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>チェック表ID</th>
                    <th><?= $this->Paginator->sort('check_date', '実施日') ?></th>
                    <th>実施者</th>
                    <th>実施回数</th>
                    <th><?php echo $this->Html->image('circle.jpg') . '/' . $this->Html->image('triangle.jpg') . '/' . $this->Html->image('x-mark.jpg'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($checkResultList as $checkResult): ?>
                <tr>
                    <td><?= $this->Number->format($checkResult->check_id) ?></td>
                    <td><?= $this->Number->format($checkResult->check_user) ?></td>
                    <td><?= h($checkResult->check_date) ?></td>
                    <td><?= $this->Number->format($checkResult->check_count) ?></td>
                    <td><?= h($checkResult->check_result) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
<div id="footer">
</div>
