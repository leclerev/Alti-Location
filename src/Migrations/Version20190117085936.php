<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190117085936 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE availability (id INT AUTO_INCREMENT NOT NULL, property_id INT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_3FB7A2BF549213EC (property_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opinion (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, advert_id INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_AB02B027F675F31B (author_id), INDEX IDX_AB02B027D07ECCB6 (advert_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE advert (id INT AUTO_INCREMENT NOT NULL, property_id INT NOT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, pay_type VARCHAR(255) NOT NULL, due_date VARCHAR(255) NOT NULL, img_path LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_54F1F40B549213EC (property_id), INDEX IDX_54F1F40BF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, member_id INT NOT NULL, city VARCHAR(255) NOT NULL, room_count INT NOT NULL, people_count INT NOT NULL, bed_count INT NOT NULL, type VARCHAR(255) NOT NULL, smoker TINYINT(1) NOT NULL, pets TINYINT(1) NOT NULL, INDEX IDX_8BF21CDE7597D3FE (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, password LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE availability ADD CONSTRAINT FK_3FB7A2BF549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B027F675F31B FOREIGN KEY (author_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B027D07ECCB6 FOREIGN KEY (advert_id) REFERENCES advert (id)');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40B549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40BF675F31B FOREIGN KEY (author_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDE7597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B027D07ECCB6');
        $this->addSql('ALTER TABLE availability DROP FOREIGN KEY FK_3FB7A2BF549213EC');
        $this->addSql('ALTER TABLE advert DROP FOREIGN KEY FK_54F1F40B549213EC');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B027F675F31B');
        $this->addSql('ALTER TABLE advert DROP FOREIGN KEY FK_54F1F40BF675F31B');
        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDE7597D3FE');
        $this->addSql('DROP TABLE availability');
        $this->addSql('DROP TABLE opinion');
        $this->addSql('DROP TABLE advert');
        $this->addSql('DROP TABLE property');
        $this->addSql('DROP TABLE member');
    }
}
