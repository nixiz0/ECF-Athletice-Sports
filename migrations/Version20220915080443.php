<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220915080443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise_main DROP FOREIGN KEY FK_7D00D0AC88B0DD58');
        $this->addSql('DROP INDEX UNIQ_7D00D0AC88B0DD58 ON franchise_main');
        $this->addSql('ALTER TABLE franchise_main DROP names_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise_main ADD names_id INT NOT NULL');
        $this->addSql('ALTER TABLE franchise_main ADD CONSTRAINT FK_7D00D0AC88B0DD58 FOREIGN KEY (names_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7D00D0AC88B0DD58 ON franchise_main (names_id)');
    }
}
