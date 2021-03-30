<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210311120853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question ADD nbr_vue INT NOT NULL, DROP nbrVue');
        $this->addSql('ALTER TABLE reponse_like ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponse_like ADD CONSTRAINT FK_900809F0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_900809F0A76ED395 ON reponse_like (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question ADD nbrVue INT DEFAULT NULL, DROP nbr_vue');
        $this->addSql('ALTER TABLE reponse_like DROP FOREIGN KEY FK_900809F0A76ED395');
        $this->addSql('DROP INDEX IDX_900809F0A76ED395 ON reponse_like');
        $this->addSql('ALTER TABLE reponse_like DROP user_id');
    }
}
