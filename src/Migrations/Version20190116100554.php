<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190116100554 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE opinion MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE opinion DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE opinion CHANGE id id_opinion INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE opinion ADD PRIMARY KEY (id_opinion)');
        $this->addSql('ALTER TABLE advert ADD id_advert INT AUTO_INCREMENT NOT NULL, DROP id, ADD PRIMARY KEY (id_advert)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advert MODIFY id_advert INT NOT NULL');
        $this->addSql('ALTER TABLE advert DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE advert ADD id INT NOT NULL, DROP id_advert');
        $this->addSql('ALTER TABLE opinion MODIFY id_opinion INT NOT NULL');
        $this->addSql('ALTER TABLE opinion DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE opinion CHANGE id_opinion id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE opinion ADD PRIMARY KEY (id)');
    }
}
