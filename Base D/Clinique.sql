-- Script généré par WinDev le 03/07/2018 10:37:57
-- Tables de l'analyse Clinique.wda
-- pour MySQL

-- Création de la table analyse
CREATE TABLE `analyse` (
    `IDanalyse` INTEGER  PRIMARY KEY ,
    `dateana` DATE ,
    `designation` VARCHAR(50) ,
    `IDmedecin` INTEGER ,
    `IDpatient` INTEGER ,
    `IDtechnicien` INTEGER ,
    `nom_analyse` VARCHAR(50) );
CREATE INDEX `WDIDX_analyse_IDmedecin` ON `analyse` (`IDmedecin`);
CREATE INDEX `WDIDX_analyse_IDpatient` ON `analyse` (`IDpatient`);
CREATE INDEX `WDIDX_analyse_IDtechnicien` ON `analyse` (`IDtechnicien`);

-- Création de la table carte
CREATE TABLE `carte` (
    `IDcarte` INTEGER  PRIMARY KEY ,
    `prenom_pro` VARCHAR(50) ,
    `nom_pro` VARCHAR(50) ,
    `matricule` VARCHAR(50) ,
    `date_abon` DATE ,
    `IDentreprise` INTEGER );
CREATE INDEX `WDIDX_carte_IDentreprise` ON `carte` (`IDentreprise`);

-- Création de la table compte
CREATE TABLE `compte` (
    `IDcompte` INTEGER  PRIMARY KEY ,
    `login` VARCHAR(50) ,
    `motpasse` VARCHAR(50) ,
    `IDprofil` INTEGER  NOT NULL  DEFAULT 0);
CREATE INDEX `WDIDX_compte_IDprofil` ON `compte` (`IDprofil`);

-- Création de la table consultation
CREATE TABLE `consultation` (
    `IDconsultation` INTEGER  PRIMARY KEY ,
    `dateconsultation` DATE ,
    `descriptioncons` VARCHAR(50) ,
    `IDpatient` INTEGER ,
    `IDmedecin` INTEGER ,
    `reglementmed` TINYINT DEFAULT 0,
    `datereglement` DATE ,
    `IDcompte` INTEGER );
CREATE INDEX `WDIDX_consultation_IDpatient` ON `consultation` (`IDpatient`);
CREATE INDEX `WDIDX_consultation_IDmedecin` ON `consultation` (`IDmedecin`);
CREATE INDEX `WDIDX_consultation_IDcompte` ON `consultation` (`IDcompte`);

-- Création de la table donneesmedicales
CREATE TABLE `donneesmedicales` (
    `IDdonneesmedicales` INTEGER  PRIMARY KEY ,
    `dateprise` DATE ,
    `tension` VARCHAR(50) ,
    `temperature` VARCHAR(50) ,
    `poids` INTEGER DEFAULT 0,
    `IDpatient` INTEGER ,
    `IDcompte` INTEGER );
CREATE INDEX `WDIDX_donneesmedicales_IDpatient` ON `donneesmedicales` (`IDpatient`);
CREATE INDEX `WDIDX_donneesmedicales_IDcompte` ON `donneesmedicales` (`IDcompte`);

-- Création de la table entreprise
CREATE TABLE `entreprise` (
    `IDentreprise` INTEGER  PRIMARY KEY ,
    `nomentreprise` VARCHAR(50) ,
    `adresse` VARCHAR(50) ,
    `telentreprise` VARCHAR(50) ,
    `type` INTEGER DEFAULT 0);

-- Création de la table hospitalisation
CREATE TABLE `hospitalisation` (
    `IDhospitalisation` INTEGER  PRIMARY KEY ,
    `descriptionhosp` VARCHAR(50) ,
    `date_entree` DATE ,
    `date_sortie` DATE ,
    `observations` VARCHAR(50) ,
    `IDpatient` INTEGER );
CREATE INDEX `WDIDX_hospitalisation_IDpatient` ON `hospitalisation` (`IDpatient`);

-- Création de la table medecin
CREATE TABLE `medecin` (
    `IDmedecin` INTEGER  PRIMARY KEY ,
    `sexemed` VARCHAR(50) ,
    `prenommed` VARCHAR(50) ,
    `nommed` VARCHAR(50) ,
    `telephonemed` VARCHAR(50) ,
    `ncnipass` VARCHAR(50) ,
    `IDcompte` INTEGER  UNIQUE );

-- Création de la table medecin_specialite
CREATE TABLE `medecin_specialite` (
    `IDspecialite` INTEGER ,
    `IDmedecin` INTEGER );
CREATE INDEX `WDIDX_medecin_specialite_IDspecialite` ON `medecin_specialite` (`IDspecialite`);
CREATE INDEX `WDIDX_medecin_specialite_IDmedecin` ON `medecin_specialite` (`IDmedecin`);
CREATE INDEX `WDIDX_medecin_specialite_IDmedecin_IDspecialite` ON `medecin_specialite` (`IDmedecin`,`IDspecialite`);

-- Création de la table ordonnance
CREATE TABLE `ordonnance` (
    `IDordonnance` INTEGER  PRIMARY KEY ,
    `dateordon` DATE ,
    `detailsordon` VARCHAR(50) ,
    `IDconsultation` INTEGER  UNIQUE );

-- Création de la table patient
CREATE TABLE `patient` (
    `IDpatient` INTEGER  PRIMARY KEY ,
    `sexep` VARCHAR(50) ,
    `prenomp` VARCHAR(50) ,
    `nomp` VARCHAR(50) ,
    `datenaissancep` DATE ,
    `telephone` VARCHAR(50) ,
    `profession` VARCHAR(50) ,
    `IDcarte` INTEGER );
CREATE INDEX `WDIDX_patient_IDcarte` ON `patient` (`IDcarte`);

-- Création de la table personnel
CREATE TABLE `personnel` (
    `IDpersonnel` INTEGER  PRIMARY KEY ,
    `sexe_pers` VARCHAR(50) ,
    `nom_pers` VARCHAR(50) ,
    `prenom_pers` VARCHAR(50) ,
    `adresse_pers` VARCHAR(50) ,
    `tel_pers` VARCHAR(50) ,
    `email_pers` VARCHAR(50) ,
    `ncnipass_pers` VARCHAR(50) ,
    `poste_pers` VARCHAR(50) ,
    `IDcompte` INTEGER  UNIQUE );

-- Création de la table profil
CREATE TABLE `profil` (
    `IDprofil` INTEGER  PRIMARY KEY ,
    `libellepro` VARCHAR(50) ,
    `IDstructuresante` INTEGER );
CREATE INDEX `WDIDX_profil_IDstructuresante` ON `profil` (`IDstructuresante`);

-- Création de la table recu
CREATE TABLE `recu` (
    `IDrecu` INTEGER  PRIMARY KEY ,
    `montant` INTEGER DEFAULT 0,
    `date` DATE ,
    `etatpayement` INTEGER DEFAULT 0,
    `IDhospitalisation` INTEGER ,
    `IDconsultation` INTEGER ,
    `date_modif` DATE ,
    `IDcompte` INTEGER );
CREATE INDEX `WDIDX_recu_IDhospitalisation` ON `recu` (`IDhospitalisation`);
CREATE INDEX `WDIDX_recu_IDconsultation` ON `recu` (`IDconsultation`);
CREATE INDEX `WDIDX_recu_IDcompte` ON `recu` (`IDcompte`);

-- Création de la table reglement
CREATE TABLE `reglement` (
    `IDreglement` INTEGER  PRIMARY KEY ,
    `date_reg` VARCHAR(50) ,
    `IDcompte` INTEGER ,
    `IDconsultation` INTEGER );
CREATE INDEX `WDIDX_reglement_IDcompte` ON `reglement` (`IDcompte`);
CREATE INDEX `WDIDX_reglement_IDconsultation` ON `reglement` (`IDconsultation`);

-- Création de la table rendezvous
CREATE TABLE `rendezvous` (
    `IDrendezvous` INTEGER  PRIMARY KEY ,
    `date_appel` TIMESTAMP ,
    `daterv` TIMESTAMP ,
    `IDcompte` INTEGER ,
    `IDpatient` INTEGER );
CREATE INDEX `WDIDX_rendezvous_IDcompte` ON `rendezvous` (`IDcompte`);
CREATE INDEX `WDIDX_rendezvous_IDpatient` ON `rendezvous` (`IDpatient`);

-- Création de la table resultat
CREATE TABLE `resultat` (
    `IDresultat` INTEGER  PRIMARY KEY ,
    `descriptionresult` VARCHAR(50) ,
    `dateresult` DATE ,
    `IDanalyse` INTEGER  UNIQUE );

-- Création de la table specialite
CREATE TABLE `specialite` (
    `IDspecialite` INTEGER  PRIMARY KEY ,
    `libellespec` VARCHAR(50) ,
    `part` INTEGER DEFAULT 0);

-- Création de la table structuresante
CREATE TABLE `structuresante` (
    `IDstructuresante` INTEGER  PRIMARY KEY ,
    `nom_struct` VARCHAR(50) ,
    `adresse_struct` VARCHAR(50) ,
    `tel_struct` VARCHAR(50) ,
    `email_struct` VARCHAR(50) ,
    `site_web` VARCHAR(50) ,
    `logo` LONGBLOB ,
    `descriptionstruct` VARCHAR(50) ,
    `mobile` VARCHAR(50) ,
    `fax` VARCHAR(50) ,
    `prix_ticket` INTEGER DEFAULT 0,
    `part_medecin` INTEGER DEFAULT 0);

-- Création de la table technicien
CREATE TABLE `technicien` (
    `IDtechnicien` INTEGER  PRIMARY KEY ,
    `sexetech` VARCHAR(50) ,
    `prenomtech` VARCHAR(50) ,
    `nomtech` VARCHAR(50) ,
    `ncnipasstech` VARCHAR(50) ,
    `telephonetech` VARCHAR(50) ,
    `IDcompte` INTEGER  UNIQUE );
-- Contraintes d'intégrité
ALTER TABLE `medecin_specialite` ADD FOREIGN KEY (`IDmedecin`) REFERENCES `medecin` (`IDmedecin`);
ALTER TABLE `medecin_specialite` ADD FOREIGN KEY (`IDspecialite`) REFERENCES `specialite` (`IDspecialite`);
ALTER TABLE `consultation` ADD FOREIGN KEY (`IDpatient`) REFERENCES `patient` (`IDpatient`);
ALTER TABLE `consultation` ADD FOREIGN KEY (`IDmedecin`) REFERENCES `medecin` (`IDmedecin`);
ALTER TABLE `ordonnance` ADD FOREIGN KEY (`IDconsultation`) REFERENCES `consultation` (`IDconsultation`);
ALTER TABLE `analyse` ADD FOREIGN KEY (`IDmedecin`) REFERENCES `medecin` (`IDmedecin`);
ALTER TABLE `analyse` ADD FOREIGN KEY (`IDpatient`) REFERENCES `patient` (`IDpatient`);
ALTER TABLE `analyse` ADD FOREIGN KEY (`IDtechnicien`) REFERENCES `technicien` (`IDtechnicien`);
ALTER TABLE `resultat` ADD FOREIGN KEY (`IDanalyse`) REFERENCES `analyse` (`IDanalyse`);
ALTER TABLE `donneesmedicales` ADD FOREIGN KEY (`IDpatient`) REFERENCES `patient` (`IDpatient`);
ALTER TABLE `patient` ADD FOREIGN KEY (`IDcarte`) REFERENCES `carte` (`IDcarte`);
ALTER TABLE `carte` ADD FOREIGN KEY (`IDentreprise`) REFERENCES `entreprise` (`IDentreprise`);
ALTER TABLE `recu` ADD FOREIGN KEY (`IDconsultation`) REFERENCES `consultation` (`IDconsultation`);
ALTER TABLE `hospitalisation` ADD FOREIGN KEY (`IDpatient`) REFERENCES `patient` (`IDpatient`);
ALTER TABLE `recu` ADD FOREIGN KEY (`IDhospitalisation`) REFERENCES `hospitalisation` (`IDhospitalisation`);
ALTER TABLE `profil` ADD FOREIGN KEY (`IDstructuresante`) REFERENCES `structuresante` (`IDstructuresante`);
ALTER TABLE `compte` ADD FOREIGN KEY (`IDprofil`) REFERENCES `profil` (`IDprofil`);
ALTER TABLE `personnel` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `technicien` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `medecin` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `donneesmedicales` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `recu` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `reglement` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `reglement` ADD FOREIGN KEY (`IDconsultation`) REFERENCES `consultation` (`IDconsultation`);
ALTER TABLE `rendezvous` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
ALTER TABLE `rendezvous` ADD FOREIGN KEY (`IDpatient`) REFERENCES `patient` (`IDpatient`);
ALTER TABLE `consultation` ADD FOREIGN KEY (`IDcompte`) REFERENCES `compte` (`IDcompte`);
