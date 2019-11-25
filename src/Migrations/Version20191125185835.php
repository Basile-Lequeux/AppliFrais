<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191125185835 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fichefrais ADD fkuser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fichefrais ADD CONSTRAINT FK_92D5AB087EF35C86 FOREIGN KEY (fkuser_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_92D5AB087EF35C86 ON fichefrais (fkuser_id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF7EF35C86');
        $this->addSql('DROP INDEX IDX_BD293ECF7EF35C86 ON ligne_frais_forfait');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP fkuser_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fichefrais DROP FOREIGN KEY FK_92D5AB087EF35C86');
        $this->addSql('DROP INDEX IDX_92D5AB087EF35C86 ON fichefrais');
        $this->addSql('ALTER TABLE fichefrais DROP fkuser_id');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD fkuser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF7EF35C86 FOREIGN KEY (fkuser_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_BD293ECF7EF35C86 ON ligne_frais_forfait (fkuser_id)');
    }
}
