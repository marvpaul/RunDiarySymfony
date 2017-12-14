<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171214124941 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE entry ADD COLUMN user_id INTEGER NOT NULL');
        $this->addSql('ALTER TABLE entry ADD COLUMN date DATE NOT NULL');
        $this->addSql('ALTER TABLE entry ADD COLUMN time TIME NOT NULL');
        $this->addSql('ALTER TABLE entry ADD COLUMN distance NUMERIC(10, 0) NOT NULL');
        $this->addSql('ALTER TABLE entry ADD COLUMN avg_speed NUMERIC(10, 0) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TEMPORARY TABLE __temp__entry AS SELECT id FROM entry');
        $this->addSql('DROP TABLE entry');
        $this->addSql('CREATE TABLE entry (id INTEGER NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO entry (id) SELECT id FROM __temp__entry');
        $this->addSql('DROP TABLE __temp__entry');
    }
}
