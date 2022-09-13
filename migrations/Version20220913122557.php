<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913122557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise DROP FOREIGN KEY FK_66F6CE2A88B0DD58');
        $this->addSql('ALTER TABLE franchise DROP FOREIGN KEY FK_66F6CE2AEF7450D9');
        $this->addSql('DROP INDEX UNIQ_66F6CE2AEF7450D9 ON franchise');
        $this->addSql('DROP INDEX UNIQ_66F6CE2A88B0DD58 ON franchise');
        $this->addSql('ALTER TABLE franchise DROP firstnames_id, DROP names_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise ADD firstnames_id INT NOT NULL, ADD names_id INT NOT NULL');
        $this->addSql('ALTER TABLE franchise ADD CONSTRAINT FK_66F6CE2A88B0DD58 FOREIGN KEY (names_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE franchise ADD CONSTRAINT FK_66F6CE2AEF7450D9 FOREIGN KEY (firstnames_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_66F6CE2AEF7450D9 ON franchise (firstnames_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_66F6CE2A88B0DD58 ON franchise (names_id)');
    }
}
