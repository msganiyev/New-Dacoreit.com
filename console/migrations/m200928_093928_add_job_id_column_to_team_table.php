 <?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%team}}`.
 */
class m200928_093928_add_job_id_column_to_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%team}}', 'job_id', $this->integer());
        $this->createIndex(
            'idx-team-job_id',
            'team',
            'job_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-team-job_id',
            'team',
            'job_id',
            'job',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-team-job_id',
            'team'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-team-job_id',
            'team'
        );
        $this->dropColumn('{{%team}}', 'job_id');
    }
}
