<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CheckResultFixture
 *
 */
class CheckResultFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'check_result';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'check_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'チェックID	 自動採番', 'autoIncrement' => true, 'precision' => null],
        'check_count' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '実施回数	 社員毎のビジネス基礎チェック実施回数目(1,2,3...＝1回目,2回目,3回目...)', 'precision' => null, 'autoIncrement' => null],
        'check_user' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '実施者	 チェック対象社員のID／登録者', 'precision' => null, 'autoIncrement' => null],
        'check_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '実施日	 編集画面にて更新可', 'precision' => null],
        'check_item' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'チェック内容', 'precision' => null, 'fixed' => null],
        'check_result' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'チェック結果	 0:""(ブランク)/1:○/2:△/3:×', 'precision' => null, 'fixed' => null],
        'created_user' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '作成者', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '作成日時', 'precision' => null],
        'modified_user' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '更新者', 'precision' => null, 'fixed' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '更新日時', 'precision' => null],
        'delete_flag' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '削除フラグ	 0:初期値／1:削除', 'precision' => null, 'autoIncrement' => null],
        'delete_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '削除日', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['check_id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'check_id' => 1,
            'check_count' => 1,
            'check_user' => 1,
            'check_date' => '2017-08-11',
            'check_item' => 'Lorem ipsum dolor sit amet',
            'check_result' => 'Lorem ipsum dolor sit amet',
            'created_user' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-08-11 16:20:47',
            'modified_user' => 'Lorem ipsum dolor sit amet',
            'modified' => '2017-08-11 16:20:47',
            'delete_flag' => 1,
            'delete_date' => '2017-08-11 16:20:47'
        ],
    ];
}
