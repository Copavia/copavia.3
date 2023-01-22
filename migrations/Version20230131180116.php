<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131180116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat ADD notification VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD notification VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE expediteur ADD prix_envoie DOUBLE PRECISION DEFAULT NULL, ADD notification VARCHAR(500) DEFAULT NULL');
        $this->addSql('ALTER TABLE voyageur ADD prix_achat DOUBLE PRECISION DEFAULT NULL, ADD notification VARCHAR(500) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyageur DROP prix_achat, DROP notification');
        $this->addSql('ALTER TABLE contact DROP notification');
        $this->addSql('ALTER TABLE expediteur DROP prix_envoie, DROP notification');
        $this->addSql('ALTER TABLE achat DROP notification');
    }
}
