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
    		'name' => 'VARCHAR(250) NOT NULL',
    		'value' => 'TINYTEXT NOT NULL',
    		'desc' => 'TINYTEXT NOT NULL',
    	], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%setting}}');
    }
}
