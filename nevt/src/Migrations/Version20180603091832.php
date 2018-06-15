<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180603091832 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE coeff_five (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, date DATE NOT NULL, coeff_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coeff_four (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, date DATE NOT NULL, coeff_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coeff_one (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, date DATE NOT NULL, coeff_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coeff_three (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, date DATE NOT NULL, coeff_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coeff_two (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, date DATE NOT NULL, coeff_value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE coeff_five');
        $this->addSql('DROP TABLE coeff_four');
        $this->addSql('DROP TABLE coeff_one');
        $this->addSql('DROP TABLE coeff_three');
        $this->addSql('DROP TABLE coeff_two');
    }
}
