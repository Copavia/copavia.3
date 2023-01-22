<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131174418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expediteur ADD transporteur_du_colis_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE expediteur ADD CONSTRAINT FK_ABA4CF8E2F0CF921 FOREIGN KEY (transporteur_du_colis_id) REFERENCES voyageur (id)');
        $this->addSql('CREATE INDEX IDX_ABA4CF8E2F0CF921 ON expediteur (transporteur_du_colis_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE expediteur DROP FOREIGN KEY FK_ABA4CF8E2F0CF921');
        $this->addSql('DROP INDEX IDX_ABA4CF8E2F0CF921 ON expediteur');
        $this->addSql('ALTER TABLE expediteur DROP transporteur_du_colis_id');
    }
}
