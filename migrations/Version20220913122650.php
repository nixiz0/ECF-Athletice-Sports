<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220913122650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise ADD name_id INT NOT NULL, ADD firstname_id INT NOT NULL');
        $this->addSql('ALTER TABLE franchise ADD CONSTRAINT FK_66F6CE2A71179CD6 FOREIGN KEY (name_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE franchise ADD CONSTRAINT FK_66F6CE2A68D0D14D FOREIGN KEY (firstname_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_66F6CE2A71179CD6 ON franchise (name_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_66F6CE2A68D0D14D ON franchise (firstname_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise DROP FOREIGN KEY FK_66F6CE2A71179CD6');
        $this->addSql('ALTER TABLE franchise DROP FOREIGN KEY FK_66F6CE2A68D0D14D');
        $this->addSql('DROP INDEX UNIQ_66F6CE2A71179CD6 ON franchise');
        $this->addSql('DROP INDEX UNIQ_66F6CE2A68D0D14D ON franchise');
        $this->addSql('ALTER TABLE franchise DROP name_id, DROP firstname_id');
    }
}
