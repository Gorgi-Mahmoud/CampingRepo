<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326231400 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A4C2885D7 on delete cascade');
        $this->addSql('DROP INDEX IDX_E01FBE6A4C2885D7 ON images');
        $this->addSql('ALTER TABLE images CHANGE  gmusee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A62292E64 FOREIGN KEY (gmusee_id) REFERENCES gmusee (id) on delete cascade');
        $this->addSql('CREATE INDEX IDX_E01FBE6A62292E64 ON images (gmusee_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A62292E64');
        $this->addSql('DROP INDEX IDX_E01FBE6A62292E64 ON images');
        $this->addSql('ALTER TABLE images CHANGE  gmusee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A4C2885D7 FOREIGN KEY (gmusee_id) REFERENCES gmusee (id)  ');
        $this->addSql('CREATE INDEX IDX_E01FBE6A4C2885D7 ON images (gmusee_id)');
    }
}
