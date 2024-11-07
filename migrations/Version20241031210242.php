<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241031210242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
{
    // Check if the index exists before renaming
    $this->addSql('DO $$
    BEGIN
        IF EXISTS (SELECT 1 FROM pg_indexes WHERE indexname = \'uniq_email\') THEN
            ALTER INDEX uniq_email RENAME TO UNIQ_E264DBA5E7927C74;
        END IF;
    END $$');
}

}
