<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'ユーザー名を入力してください。')
            ->maxLength('username', 50,'ユーザー名は50バイト(半角50文字,全角25文字)以内で入力してください。')
            ->notEmpty('password', 'パスワードを入力してください。')
            ->alphaNumeric('password', 'パスワードは半角英数で入力してください')
            ->maxLength('password', 50,'パスワードは50バイト(半角50文字)以内で入力してください。');
    }

}