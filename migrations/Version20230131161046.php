<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131161046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expediteur ADD voyageur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE expediteur ADD CONSTRAINT FK_ABA4CF8E62915402 FOREIGN KEY (voyageur_id) REFERENCES voyageur (id)');
        $this->addSql('CREATE INDEX IDX_ABA4CF8E62915402 ON expediteur (voyageur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expediteur DROP FOREIGN KEY FK_ABA4CF8E62915402');
        $this->addSql('DROP INDEX IDX_ABA4CF8E62915402 ON expediteur');
        $this->addSql('ALTER TABLE expediteur DROP voyageur_id');
    }
}
