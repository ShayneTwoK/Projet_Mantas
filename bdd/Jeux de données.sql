-- DONNEES TYPE_UTILISATEUR --
INSERT INTO TYPE_UTILISATEUR(role, poste)
VALUES("0", null);
INSERT INTO TYPE_UTILISATEUR(role, poste)
VALUES("1", "RH");
-- DONNEES UTILISATEUR --
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(01, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(02, "Charles", "Henry", "12345", "blabla@gmail.com", "DRH", "1");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(03, "Charles", "Henry", "12345", "blabla@gmail.com", "RH", "1");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(04, "Charles", "Henry", "12345", "blabla@gmail.com", "ARH", "1");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(06, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(05, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(07, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(08, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(09, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(10, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");
INSERT INTO UTILISATEUR(id_user, prenom, nom, mdp, mail, poste, role)
VALUES(11, "Charles", "Henry", "12345", "blabla@gmail.com", null, "0");

-- DONNEES OFFICIELLE TYPE CONTRAT --
INSERT INTO TYPE_CONTRAT(id_type, libelle_contrat)
VALUES(01, "CDD");
INSERT INTO TYPE_CONTRAT(id_type, libelle_contrat)
VALUES(02, "CDI");
INSERT INTO TYPE_CONTRAT(id_type, libelle_contrat)
VALUES(03, "INTERIM");

-- DONNEES COMPETENCES --
INSERT INTO COMPETENCES(id_comp, libelle_comp)
VALUES(01, "C#");
INSERT INTO COMPETENCES(id_comp, libelle_comp)
VALUES(02, "Java");
INSERT INTO COMPETENCES(id_comp, libelle_comp)
VALUES(03, "JavaScript");
INSERT INTO COMPETENCES(id_comp, libelle_comp)
VALUES(04, "PHP");
INSERT INTO COMPETENCES(id_comp, libelle_comp)
VALUES(05, "CSS");
INSERT INTO COMPETENCES(id_comp, libelle_comp)
VALUES(06, "HTML");

-- DONNEES OFFRE --
INSERT INTO OFFRE(id_offre, titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES(01, "RECHERCHE DEVELOPPEUR JAVA",  "/upload/video404CHARLESJAVA.mp4", "JE CHERCHE UN DEVELOPPEUR JAVA COMPETENT", "2018-11-10", 01);
INSERT INTO OFFRE(id_offre, titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES(02, "RECHERCHE DEVELOPPEUR C#",  "/upload/video405BORISC#.mp4", "JE CHERCHE UN DEVELOPPEUR C# SERIEUX", "2018-25-11", 02);

-- DONNEES CANDIDATURE --
INSERT INTO CANDIDATURE(id_candidature, lettre_motiv, cv_candid, video_reponse, id_user, id_offre)
VALUES(01, "motivCharles.pdf", "cvCharles.pdf", "videoCharles.mp4", 01, 01);

-- DONNEES POSSEDER --
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(01, 01);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(02, 01);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(03, 01);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(04, 01);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(05, 01);
