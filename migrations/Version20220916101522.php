<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220916101522 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE structure_main_option (structure_main_id INT NOT NULL, option_id INT NOT NULL, INDEX IDX_54CC9A05B9DCD7BB (structure_main_id), INDEX IDX_54CC9A05A7C41D6F (option_id), PRIMARY KEY(structure_main_id, option_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE structure_main_option ADD CONSTRAINT FK_54CC9A05B9DCD7BB FOREIGN KEY (structure_main_id) REFERENCES structure_main (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE structure_main_option ADD CONSTRAINT FK_54CC9A05A7C41D6F FOREIGN KEY (option_id) REFERENCES `option` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `option` DROP FOREIGN KEY FK_5A8600B0B9DCD7BB');
        $this->addSql('DROP INDEX IDX_5A8600B0B9DCD7BB ON `option`');
        $this->addSql('ALTER TABLE `option` DROP structure_main_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE structure_main_option DROP FOREIGN KEY FK_54CC9A05B9DCD7BB');
        $this->addSql('ALTER TABLE structure_main_option DROP FOREIGN KEY FK_54CC9A05A7C41D6F');
        $this->addSql('DROP TABLE structure_main_option');
        $this->addSql('ALTER TABLE `option` ADD structure_main_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `option` ADD CONSTRAINT FK_5A8600B0B9DCD7BB FOREIGN KEY (structure_main_id) REFERENCES structure_main (id)');
        $this->addSql('CREATE INDEX IDX_5A8600B0B9DCD7BB ON `option` (structure_main_id)');
    }
}
