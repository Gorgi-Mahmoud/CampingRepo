<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330232840 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_E01FBE6AFF203408 on delete cascade');
        $this->addSql('DROP INDEX FK_E01FBE6AFF203408 ON photos');
        $this->addSql('ALTER TABLE photos DROP siteh_id on delete cascade');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photos ADD siteh_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_E01FBE6AFF203408 FOREIGN KEY (siteh_id) REFERENCES siteh (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX FK_E01FBE6AFF203408 ON photos (siteh_id) on delete cascade');
    }
}
