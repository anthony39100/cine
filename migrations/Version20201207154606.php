<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201207154606 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteur (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, date_anniversaire DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE daredevil (id INT AUTO_INCREMENT NOT NULL, nom_episode LONGTEXT NOT NULL, description LONGTEXT NOT NULL, image_serie LONGTEXT NOT NULL, date_at DATETIME NOT NULL, realisateur LONGTEXT NOT NULL, episode VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, date_at DATETIME NOT NULL, realisateur VARCHAR(255) NOT NULL, affiche LONGTEXT NOT NULL, description LONGTEXT NOT NULL, bande_annonce VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films_acteur (films_id INT NOT NULL, acteur_id INT NOT NULL, INDEX IDX_5DAE58DB939610EE (films_id), INDEX IDX_5DAE58DBDA6F574A (acteur_id), PRIMARY KEY(films_id, acteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_acteur (role_id INT NOT NULL, acteur_id INT NOT NULL, INDEX IDX_41DC32D3D60322AC (role_id), INDEX IDX_41DC32D3DA6F574A (acteur_id), PRIMARY KEY(role_id, acteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_films (role_id INT NOT NULL, films_id INT NOT NULL, INDEX IDX_3930227ED60322AC (role_id), INDEX IDX_3930227E939610EE (films_id), PRIMARY KEY(role_id, films_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE films_acteur ADD CONSTRAINT FK_5DAE58DB939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_acteur ADD CONSTRAINT FK_5DAE58DBDA6F574A FOREIGN KEY (acteur_id) REFERENCES acteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_acteur ADD CONSTRAINT FK_41DC32D3D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_acteur ADD CONSTRAINT FK_41DC32D3DA6F574A FOREIGN KEY (acteur_id) REFERENCES acteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_films ADD CONSTRAINT FK_3930227ED60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_films ADD CONSTRAINT FK_3930227E939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films_acteur DROP FOREIGN KEY FK_5DAE58DBDA6F574A');
        $this->addSql('ALTER TABLE role_acteur DROP FOREIGN KEY FK_41DC32D3DA6F574A');
        $this->addSql('ALTER TABLE films_acteur DROP FOREIGN KEY FK_5DAE58DB939610EE');
        $this->addSql('ALTER TABLE role_films DROP FOREIGN KEY FK_3930227E939610EE');
        $this->addSql('ALTER TABLE role_acteur DROP FOREIGN KEY FK_41DC32D3D60322AC');
        $this->addSql('ALTER TABLE role_films DROP FOREIGN KEY FK_3930227ED60322AC');
        $this->addSql('DROP TABLE acteur');
        $this->addSql('DROP TABLE daredevil');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE films_acteur');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE role_acteur');
        $this->addSql('DROP TABLE role_films');
    }
}
