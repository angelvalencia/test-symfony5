<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201101224835 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE log_user_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE log_user (id INT NOT NULL, fecha_crea TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, fecha_modifica TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ip_usuario VARCHAR(20) DEFAULT NULL, user_agent VARCHAR(200) DEFAULT NULL, cod_pais VARCHAR(2) DEFAULT NULL, clave_event VARCHAR(6) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE log_user_id_seq CASCADE');
        $this->addSql('DROP TABLE log_user');
    }
}
