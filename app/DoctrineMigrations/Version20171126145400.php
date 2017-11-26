<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171126145400 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE vehicule ADD personne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DA21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DA21BD112 ON vehicule (personne_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DA21BD112');
        $this->addSql('DROP INDEX IDX_292FFF1DA21BD112 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP personne_id');
    }
}
