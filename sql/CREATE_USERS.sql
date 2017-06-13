-- Project Name : kinyuu
-- Date/Time    : 2017/06/14 0:06:46
-- Author       : Yu
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

-- ユーザー
create table users (
  ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY comment 'ID'
  , username VARCHAR(50) comment 'ユーザー名'
  , password VARCHAR(255) comment 'パスワード	 HASH値'
  , role VARCHAR(20) comment 'ロール'
  , created DATETIME default NULL comment '作成日時'
  , modified DATETIME default NULL comment '更新日時'
) comment 'ユーザー' ;

