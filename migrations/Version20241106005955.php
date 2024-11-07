<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241106005955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
{
    // Modify the phone_number column type to character varying
    $this->addSql('ALTER TABLE dashboard ALTER COLUMN phone_number TYPE character varying(255)');
}


public function down(Schema $schema): void
{
    // Revert the phone_number column back to integer
    $this->addSql('ALTER TABLE dashboard ALTER COLUMN phone_number TYPE integer');
}

}
