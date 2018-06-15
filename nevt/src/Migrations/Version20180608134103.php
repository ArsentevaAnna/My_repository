<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180608134103 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, taxplayer_num VARCHAR(255) NOT NULL, unit_num INT NOT NULL, employees_num INT NOT NULL, sort_activity INT NOT NULL, investment INT NOT NULL, patent_num INT NOT NULL, patent_application_num INT NOT NULL, quote_num INT NOT NULL, research_num INT NOT NULL, publication_num INT NOT NULL, net_profit DOUBLE PRECISION NOT NULL, intangible_asset DOUBLE PRECISION NOT NULL, cost_oil_production DOUBLE PRECISION NOT NULL, oil_production DOUBLE PRECISION NOT NULL, period_start DATE NOT NULL, period_end DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE company');
    }
}
