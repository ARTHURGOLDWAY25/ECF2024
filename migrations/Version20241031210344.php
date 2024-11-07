<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20241031210344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Rename unique index on user_registration';
    }

    public function up(Schema $schema): void
    {
        // this line is problematic
         // Rename the index in the user_registration table
         $this->addSql('ALTER INDEX uniq_e264dba5e7927c74 RENAME TO uniq_email;');
    }

    public function down(Schema $schema): void
    {
        // Revert the index rename in case of a rollback
        $this->addSql('ALTER INDEX uniq_email RENAME TO uniq_e264dba5e7927c74;');
    }
}

