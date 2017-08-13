<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator->notEmpty('id', '社員番号を入力してください。')
            ->maxLength('id', 10, '社員番号は10バイト(半角10文字)以内で入力してください。')
            ->notEmpty('username', '名前を入力してください。')
            ->maxLength('username', 50, '名前は50バイト(半角50文字,全角25文字)以内で入力してください。')
            ->notEmpty('password', 'パスワードを入力してください。')
            ->alphaNumeric('password', 'パスワードは半角英数で入力してください')
            ->maxLength('password', 50, 'パスワードは50バイト(半角50文字)以内で入力してください。');
    }
}