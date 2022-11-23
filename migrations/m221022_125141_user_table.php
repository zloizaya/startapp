<?php

use yii\db\Migration;
use app\models\User;
use yii\db\Schema;

/**
 * Class m221022_125141_user_table
 */
class m221022_125141_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'username' => $this->string()->notNull(),
            'full_name' => $this->string(),
            'phone' => $this->string(),
            'position' => $this->string(),
            'auth_key' => $this->string(32),
            'email_confirm_token' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->createIndex('idx-user-username', '{{%user}}', 'username', true);
        $this->createIndex('idx-user-email', '{{%user}}', 'email', true);

        $model = new User();
        $model->username = "admin";
        $model->email = "admin@startapp.loc";
        $model->setPassword('asd123');
        $model->generateAuthKey();
        $model->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221022_125141_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221022_125141_user_table cannot be reverted.\n";

        return false;
    }
    */
}
