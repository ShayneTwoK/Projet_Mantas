CREATE DATABASE videoRecrut;
USE videoRecrut;


CREATE TABLE TYPE_UTILISATEUR
(
  role CHAR(1),
  poste VARCHAR(3),
  CONSTRAINT pk_role PRIMARY KEY(role)
);

CREATE TABLE UTILISATEUR
(
  id_user INT(4),
  prenom VARCHAR(50) NOT NULL,
  nom VARCHAR(50) NOT NULL,
  mdp VARCHAR(50) NOT NULL,
  mail VARCHAR(50) NOT NULL,
  poste VARCHAR(3),
  role CHAR(1) NOT NULL,
  CONSTRAINT pk_utilisateur PRIMARY KEY(id_user),
  CONSTRAINT fk_utilisateur FOREIGN KEY(role)
  REFERENCES TYPE_UTILISATEUR(role)
);
CREATE TABLE TYPE_CONTRAT
(
  id_type INT(4),
  libelle_contrat VARCHAR(50) NOT NULL,
  CONSTRAINT pk_type_contrat PRIMARY KEY(id_type)
);

CREATE TABLE COMPETENCES
(
  id_comp INT(4),
  libelle_comp VARCHAR(50) NOT NULL,
  CONSTRAINT pk_competence PRIMARY KEY(id_comp)
);

CREATE TABLE OFFRE
(
  id_offre INT(4),
  titre_offre VARCHAR(50) NOT NULL,
  video_offre VARCHAR(150) NOT NULL,
  desc_offre VARCHAR(500) NOT NULL,
  date_limite DATE NOT NULL,
  type_offre INT(4),
  CONSTRAINT pk_offre PRIMARY KEY(id_offre),
  CONSTRAINT fk_offre FOREIGN KEY(type_offre)
  REFERENCES TYPE_CONTRAT(id_type)
);

CREATE TABLE CANDIDATURE
(
  id_candidature INT(4),
  lettre_motiv VARCHAR(50) NOT NULL,
  cv_candid VARCHAR(50) NOT NULL,
  video_reponse VARCHAR(50) NOT NULL,
  id_user INT(4),
  id_offre INT(4),
  CONSTRAINT pk_candidature PRIMARY KEY(id_candidature),
  CONSTRAINT fk_candidature_U FOREIGN KEY(id_user)
  REFERENCES UTILISATEUR(id_user),
  CONSTRAINT fk_candidature_O FOREIGN KEY(id_offre)
  REFERENCES OFFRE(id_offre)
);

CREATE TABLE POSSEDER
(
  id_comp INT(4),
  id_offre INT(4),
  CONSTRAINT pk_posseder PRIMARY KEY(id_comp, id_offre),
  CONSTRAINT fk_posseder_C FOREIGN KEY(id_comp)
  REFERENCES COMPETENCES(id_comp),
  CONSTRAINT fk_posseder_O FOREIGN KEY(id_offre)
  REFERENCES OFFRE(id_offre)
);