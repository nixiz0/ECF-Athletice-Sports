<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220916205702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structure_main ADD franchise_main_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structure_main ADD CONSTRAINT FK_E32BF46371BA456 FOREIGN KEY (franchise_main_id) REFERENCES franchise_main (id)');
        $this->addSql('CREATE INDEX IDX_E32BF46371BA456 ON structure_main (franchise_main_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structure_main DROP FOREIGN KEY FK_E32BF46371BA456');
        $this->addSql('DROP INDEX IDX_E32BF46371BA456 ON structure_main');
        $this->addSql('ALTER TABLE structure_main DROP franchise_main_id');
    }
}
