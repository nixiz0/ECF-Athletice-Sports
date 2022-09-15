<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220915075637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise_main ADD is_active TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD franchise_mains_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649654E5240 FOREIGN KEY (franchise_mains_id) REFERENCES franchise_main (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649654E5240 ON user (franchise_mains_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE franchise_main DROP is_active');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649654E5240');
        $this->addSql('DROP INDEX UNIQ_8D93D649654E5240 ON user');
        $this->addSql('ALTER TABLE user DROP franchise_mains_id');
    }
}
