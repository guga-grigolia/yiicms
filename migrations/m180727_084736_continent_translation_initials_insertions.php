<?php

use yii\db\Migration;

/**
 * Class m180727_084736_continent_translation_initials_insertions
 */
class m180727_084736_continent_translation_initials_insertions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%continent_translation}}',['name' => 'Afrika','language' => 'de','continent_id' => 1,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Antarktis','language' => 'de','continent_id' => 2,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Asien','language' => 'de','continent_id' => 3,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Europa','language' => 'de','continent_id' => 4,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Nordamerika','language' => 'de','continent_id' => 5,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Ozeanien','language' => 'de','continent_id' => 6,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Südamerika','language' => 'de','continent_id' => 7,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);

        $this->insert('{{%continent_translation}}',['name' => 'Africa','language' => 'en','continent_id' => 1,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Antarctica','language' => 'en','continent_id' => 2,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Asia','language' => 'en','continent_id' => 3,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Europe','language' => 'en','continent_id' => 4,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'North America','language' => 'en','continent_id' => 5,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'Australia/Oceania','language' => 'en','continent_id' => 6,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
        $this->insert('{{%continent_translation}}',['name' => 'South America','language' => 'en','continent_id' => 7,'created_at' => time(),'updated_at' => time(),'created_by' => 1,'updated_by' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%continent_translation}}');
    }
}
