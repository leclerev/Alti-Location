<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190116095706 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE opinion (id INT AUTO_INCREMENT NOT NULL, id_membre INT NOT NULL, id_advert INT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE advert MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE advert DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE advert CHANGE id id_advert INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE advert ADD PRIMARY KEY (id_advert)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE opinion');
        $this->addSql('ALTER TABLE advert MODIFY id_advert INT NOT NULL');
        $this->addSql('ALTER TABLE advert DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE advert CHANGE id_advert id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE advert ADD PRIMARY KEY (id)');
    }
}
