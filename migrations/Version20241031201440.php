<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241031201440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
{
    // Check if the sequence exists and create it if not
    $this->addSql("CREATE SEQUENCE IF NOT EXISTS user_registration_id_seq INCREMENT BY 1 MINVALUE 1 START 1");

    // Create the user_registration table if it doesn't exist
    $this->addSql("CREATE TABLE IF NOT EXISTS user_registration (id INT NOT NULL DEFAULT nextval('user_registration_id_seq'), email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))");
}



public function down(Schema $schema): void
{
    $this->addSql('DROP SEQUENCE IF EXISTS user_registration_id_seq CASCADE');
    $this->addSql('DROP TABLE IF EXISTS user_registration');
}

}

