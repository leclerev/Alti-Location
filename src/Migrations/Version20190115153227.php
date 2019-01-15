<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190115153227 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE members MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE members DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE members DROP id, CHANGE id_member id_member INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE members ADD PRIMARY KEY (id_member)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE members MODIFY id_member INT NOT NULL');
        $this->addSql('ALTER TABLE members DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE members ADD id INT AUTO_INCREMENT NOT NULL, CHANGE id_member id_member INT NOT NULL');
        $this->addSql('ALTER TABLE members ADD PRIMARY KEY (id)');
    }
}
