<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190117121453 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B027D07ECCB6');
        $this->addSql('DROP TABLE advert');
        $this->addSql('ALTER TABLE availability CHANGE property_id property_id INT NOT NULL');
        $this->addSql('DROP INDEX IDX_AB02B027D07ECCB6 ON opinion');
        $this->addSql('ALTER TABLE opinion ADD property_id INT DEFAULT NULL, DROP advert_id');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B027549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX IDX_AB02B027549213EC ON opinion (property_id)');
        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDE7597D3FE');
        $this->addSql('DROP INDEX IDX_8BF21CDE7597D3FE ON property');
        $this->addSql('ALTER TABLE property ADD title VARCHAR(255) NOT NULL, ADD content LONGTEXT NOT NULL, ADD price DOUBLE PRECISION NOT NULL, ADD pay_type VARCHAR(255) NOT NULL, ADD due_date VARCHAR(255) NOT NULL, ADD img_path LONGTEXT DEFAULT NULL, CHANGE member_id author_id INT NOT NULL');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDEF675F31B FOREIGN KEY (author_id) REFERENCES member (id)');
        $this->addSql('CREATE INDEX IDX_8BF21CDEF675F31B ON property (author_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE advert (id INT AUTO_INCREMENT NOT NULL, property_id INT NOT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, price DOUBLE PRECISION NOT NULL, pay_type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, due_date VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, img_path LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_54F1F40BF675F31B (author_id), UNIQUE INDEX UNIQ_54F1F40B549213EC (property_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40B549213EC FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('ALTER TABLE advert ADD CONSTRAINT FK_54F1F40BF675F31B FOREIGN KEY (author_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE availability CHANGE property_id property_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B027549213EC');
        $this->addSql('DROP INDEX IDX_AB02B027549213EC ON opinion');
        $this->addSql('ALTER TABLE opinion ADD advert_id INT NOT NULL, DROP property_id');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B027D07ECCB6 FOREIGN KEY (advert_id) REFERENCES advert (id)');
        $this->addSql('CREATE INDEX IDX_AB02B027D07ECCB6 ON opinion (advert_id)');
        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDEF675F31B');
        $this->addSql('DROP INDEX IDX_8BF21CDEF675F31B ON property');
        $this->addSql('ALTER TABLE property DROP title, DROP content, DROP price, DROP pay_type, DROP due_date, DROP img_path, CHANGE author_id member_id INT NOT NULL');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDE7597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('CREATE INDEX IDX_8BF21CDE7597D3FE ON property (member_id)');
    }
}
