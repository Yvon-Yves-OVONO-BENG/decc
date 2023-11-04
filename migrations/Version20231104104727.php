<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231104104727 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE aptitude (id INT AUTO_INCREMENT NOT NULL, aptitude VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE arrondissement (id INT AUTO_INCREMENT NOT NULL, departement_id INT DEFAULT NULL, arrondissement VARCHAR(255) NOT NULL, INDEX IDX_3A3B64C4CCF9E01E (departement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, examen_id INT DEFAULT NULL, serie_id INT DEFAULT NULL, statut_id INT DEFAULT NULL, handicap_id INT DEFAULT NULL, transmission_id INT DEFAULT NULL, sexe_id INT DEFAULT NULL, aptitude_id INT DEFAULT NULL, epreuve_facultative_id INT DEFAULT NULL, numero_acte VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, date_naissance_at DATE DEFAULT NULL, lieu_naissance VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, nom_pere VARCHAR(255) DEFAULT NULL, nom_mere VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, qrcode VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', anonymat VARCHAR(255) DEFAULT NULL, INDEX IDX_6AB5B4715C8659A (examen_id), INDEX IDX_6AB5B471D94388BD (serie_id), INDEX IDX_6AB5B471F6203804 (statut_id), INDEX IDX_6AB5B471B996CB29 (handicap_id), INDEX IDX_6AB5B47178D28519 (transmission_id), INDEX IDX_6AB5B471448F3B3C (sexe_id), INDEX IDX_6AB5B471D4FDF611 (aptitude_id), INDEX IDX_6AB5B471770DB9E0 (epreuve_facultative_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, classe VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, region_id INT DEFAULT NULL, departement VARCHAR(255) DEFAULT NULL, INDEX IDX_C1765B6398260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE epreuve_facultative (id INT AUTO_INCREMENT NOT NULL, epreuve_facultative VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etablissement (id INT AUTO_INCREMENT NOT NULL, arrondissement_id INT DEFAULT NULL, ordre_enseignement_id INT DEFAULT NULL, type_enseignement_id INT DEFAULT NULL, type_cours_id INT DEFAULT NULL, nom_etablissement VARCHAR(255) DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, contact VARCHAR(255) DEFAULT NULL, INDEX IDX_20FD592C407DBC11 (arrondissement_id), INDEX IDX_20FD592C98AB4B36 (ordre_enseignement_id), INDEX IDX_20FD592C5CD8AF54 (type_enseignement_id), INDEX IDX_20FD592CB3305F4C (type_cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE examen (id INT AUTO_INCREMENT NOT NULL, examen VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE handicap (id INT AUTO_INCREMENT NOT NULL, handicap VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere (id INT AUTO_INCREMENT NOT NULL, type_enseignement_id INT DEFAULT NULL, matiere VARCHAR(255) DEFAULT NULL, INDEX IDX_9014574A5CD8AF54 (type_enseignement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE operateur (id INT AUTO_INCREMENT NOT NULL, operateur VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordre_enseignement (id INT AUTO_INCREMENT NOT NULL, ordre_enseignement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, region VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE serie (id INT AUTO_INCREMENT NOT NULL, serie VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sexe (id INT AUTO_INCREMENT NOT NULL, sexe VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_centre (id INT AUTO_INCREMENT NOT NULL, sous_centre VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transmission (id INT AUTO_INCREMENT NOT NULL, transmission VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_cours (id INT AUTO_INCREMENT NOT NULL, type_cours VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_enseignement (id INT AUTO_INCREMENT NOT NULL, type_enseignement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE arrondissement ADD CONSTRAINT FK_3A3B64C4CCF9E01E FOREIGN KEY (departement_id) REFERENCES departement (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B4715C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471D94388BD FOREIGN KEY (serie_id) REFERENCES serie (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471B996CB29 FOREIGN KEY (handicap_id) REFERENCES handicap (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B47178D28519 FOREIGN KEY (transmission_id) REFERENCES transmission (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471448F3B3C FOREIGN KEY (sexe_id) REFERENCES sexe (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471D4FDF611 FOREIGN KEY (aptitude_id) REFERENCES aptitude (id)');
        $this->addSql('ALTER TABLE candidat ADD CONSTRAINT FK_6AB5B471770DB9E0 FOREIGN KEY (epreuve_facultative_id) REFERENCES epreuve_facultative (id)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B6398260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592C407DBC11 FOREIGN KEY (arrondissement_id) REFERENCES arrondissement (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592C98AB4B36 FOREIGN KEY (ordre_enseignement_id) REFERENCES ordre_enseignement (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592C5CD8AF54 FOREIGN KEY (type_enseignement_id) REFERENCES type_enseignement (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592CB3305F4C FOREIGN KEY (type_cours_id) REFERENCES type_cours (id)');
        $this->addSql('ALTER TABLE matiere ADD CONSTRAINT FK_9014574A5CD8AF54 FOREIGN KEY (type_enseignement_id) REFERENCES type_enseignement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE arrondissement DROP FOREIGN KEY FK_3A3B64C4CCF9E01E');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B4715C8659A');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471D94388BD');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471F6203804');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471B996CB29');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B47178D28519');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471448F3B3C');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471D4FDF611');
        $this->addSql('ALTER TABLE candidat DROP FOREIGN KEY FK_6AB5B471770DB9E0');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B6398260155');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592C407DBC11');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592C98AB4B36');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592C5CD8AF54');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592CB3305F4C');
        $this->addSql('ALTER TABLE matiere DROP FOREIGN KEY FK_9014574A5CD8AF54');
        $this->addSql('DROP TABLE aptitude');
        $this->addSql('DROP TABLE arrondissement');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE epreuve_facultative');
        $this->addSql('DROP TABLE etablissement');
        $this->addSql('DROP TABLE examen');
        $this->addSql('DROP TABLE handicap');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('DROP TABLE operateur');
        $this->addSql('DROP TABLE ordre_enseignement');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE serie');
        $this->addSql('DROP TABLE sexe');
        $this->addSql('DROP TABLE sous_centre');
        $this->addSql('DROP TABLE statut');
        $this->addSql('DROP TABLE transmission');
        $this->addSql('DROP TABLE type_cours');
        $this->addSql('DROP TABLE type_enseignement');
    }
}
