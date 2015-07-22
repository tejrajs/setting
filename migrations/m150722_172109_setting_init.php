<?php

use yii\db\Schema;
use yii\db\Migration;

class m150722_172109_setting_init extends Migration
{
    public function up()
    {
    	$tableOptions = null;
    	if ($this->db->driverName === 'mysql') {
    		// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
    		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    	}
   		$this->createTable('{{%setting}}', [
    		'id' => Schema::TYPE_PK,
   			'category' => 'VARCHAR(150) NOT NULL',
    		'name' => 'VARCHAR(250) NOT NULL',
    		'value' => 'TINYTEXT NOT NULL',
    		'desc' => 'TINYTEXT NOT NULL',
    	], $tableOptions);
   		
   		$this->execute($this->getUserSql());
    }
	
    public function getUserSql(){
    	return "INSERT INTO {{%setting}} (`category`, `name`, `value`, `desc`) VALUES
				('email', 'email_host', 'smtp.gmail.com', 'Email Host'),
				('email', 'email_username', 'email@email.com', 'Email Username'),
				('email', 'email_password', '******', 'Email Password'),
				('email', 'email_port', '587', 'Email Port')
    	";
    }
    public function down()
    {
        $this->dropTable('{{%setting}}');
    }
}
