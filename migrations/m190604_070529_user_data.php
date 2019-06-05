<?php

use yii\db\Migration;

/**
 * Class m190604_070529_user_data
 */
class m190604_070529_user_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190604_070529_user_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190604_070529_user_data cannot be reverted.\n";

        return false;
    }
    */
}
