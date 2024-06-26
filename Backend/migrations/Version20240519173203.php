<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240519173203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal CHANGE etat etat LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE avis CHANGE commentaire commentaire LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE habitat CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE rapport_veterinaire CHANGE detail detail LONGTEXT NOT NULL');
        //$this->addSql('ALTER TABLE rapport_veterinaire ADD CONSTRAINT FK_CE729CDEFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES user (id)');
        //$this->addSql('ALTER TABLE rapport_veterinaire ADD CONSTRAINT FK_CE729CDE8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        //$this->addSql('CREATE INDEX IDX_CE729CDEFB88E14F ON rapport_veterinaire (utilisateur_id)');
        //$this->addSql('CREATE INDEX IDX_CE729CDE8E962C16 ON rapport_veterinaire (animal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal CHANGE etat etat VARCHAR(50) NOT NULL');
        //$this->addSql('ALTER TABLE rapport_veterinaire DROP FOREIGN KEY FK_CE729CDEFB88E14F');
        //$this->addSql('ALTER TABLE rapport_veterinaire DROP FOREIGN KEY FK_CE729CDE8E962C16');
        //$this->addSql('DROP INDEX IDX_CE729CDEFB88E14F ON rapport_veterinaire');
        //$this->addSql('DROP INDEX IDX_CE729CDE8E962C16 ON rapport_veterinaire');
        $this->addSql('ALTER TABLE rapport_veterinaire CHANGE detail detail VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE avis CHANGE commentaire commentaire VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE habitat CHANGE description description VARCHAR(50) NOT NULL');
    }
}
