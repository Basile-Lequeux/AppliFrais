<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191125173445 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_frais_forfait ADD fkfraisforfait_id INT DEFAULT NULL, ADD fkfichefrais_id INT DEFAULT NULL, ADD fkuser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF67D80792 FOREIGN KEY (fkfraisforfait_id) REFERENCES frais_forfait (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECFA89EB7D3 FOREIGN KEY (fkfichefrais_id) REFERENCES fichefrais (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECF7EF35C86 FOREIGN KEY (fkuser_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_BD293ECF67D80792 ON ligne_frais_forfait (fkfraisforfait_id)');
        $this->addSql('CREATE INDEX IDX_BD293ECFA89EB7D3 ON ligne_frais_forfait (fkfichefrais_id)');
        $this->addSql('CREATE INDEX IDX_BD293ECF7EF35C86 ON ligne_frais_forfait (fkuser_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF67D80792');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECFA89EB7D3');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECF7EF35C86');
        $this->addSql('DROP INDEX IDX_BD293ECF67D80792 ON ligne_frais_forfait');
        $this->addSql('DROP INDEX IDX_BD293ECFA89EB7D3 ON ligne_frais_forfait');
        $this->addSql('DROP INDEX IDX_BD293ECF7EF35C86 ON ligne_frais_forfait');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP fkfraisforfait_id, DROP fkfichefrais_id, DROP fkuser_id');
    }
}
