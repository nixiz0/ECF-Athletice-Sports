<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913122341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE franchise (id INT AUTO_INCREMENT NOT NULL, firstnames_id INT NOT NULL, names_id INT NOT NULL, UNIQUE INDEX UNIQ_66F6CE2AEF7450D9 (firstnames_id), UNIQUE INDEX UNIQ_66F6CE2A88B0DD58 (names_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE franchise ADD CONSTRAINT FK_66F6CE2AEF7450D9 FOREIGN KEY (firstnames_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE franchise ADD CONSTRAINT FK_66F6CE2A88B0DD58 FOREIGN KEY (names_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise DROP FOREIGN KEY FK_66F6CE2AEF7450D9');
        $this->addSql('ALTER TABLE franchise DROP FOREIGN KEY FK_66F6CE2A88B0DD58');
        $this->addSql('DROP TABLE franchise');
    }
}
