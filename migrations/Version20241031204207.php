<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20241031204207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ensure unique index on email exists without duplication';
    }

    public function up(Schema $schema): void
    {
        // Do not include any code here to create uniq_e264dba5e7927c74
    }
    

    public function down(Schema $schema): void
    {
        // Drop the index if it exists
        $this->addSql('DO $$
        BEGIN
            IF EXISTS (SELECT 1 FROM pg_indexes WHERE indexname = \'uniq_e264dba5e7927c74\') THEN
                DROP INDEX uniq_e264dba5e7927c74;
            END IF;
        END $$;');
    }
}
