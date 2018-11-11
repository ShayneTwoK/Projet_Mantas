-- DONNEES TYPE_UTILISATEUR --
INSERT INTO TYPE_UTILISATEUR(role, poste)
VALUES("0", null);
INSERT INTO TYPE_UTILISATEUR(role, poste)
VALUES("1", "RH");
-- DONNEES UTILISATEUR --
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Charles", "Henry", "12345", "c.henry@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Boris", "Leclerc", "2222", "b.leclerc@gmail.com", "DRH", "1");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Joris", "Carrefour", "0000", "J.carrefour@gmail.com", "RH", "1");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Loris", "Poridge", "1111", "l.poridge@gmail.com", "ARH", "1");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Jeuneviève", "De fontené", "6666", "j.defontené@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Freddy", "Kruger", "9999", "f.kruger@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Jean", "Mi", "5555", "j.mi@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Jeanne", "De La Compta", "7777", "j.delacompta@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Ulysse", "Revient", "4444", "u.revient@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Cassandra", "Bracadabra", "8888", "c.bracadabra@gmail.com", null, "0");
INSERT INTO UTILISATEUR(prenom, nom, mdp, mail, poste, role)
VALUES("Capucine", "Jacobin", "3333", "blabla@gmail.com", null, "0");

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
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("RECHERCHE DEVELOPPEUR JAVA",  "/upload/video404CHARLESJAVA.mp4", "JE CHERCHE UN DEVELOPPEUR JAVA COMPETENT", "2018-11-10", 01);
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("RECHERCHE DEVELOPPEUR C#",  "/upload/video405BORISC#.mp4", "JE CHERCHE UN DEVELOPPEUR C# SERIEUX", "2018-11-25", 02);
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("RECHERCHE DEVELOPPEUR PHP",  "/upload/video408JORISPHP.mp4", "JE CHERCHE UN DEVELOPPEUR PHP ASSIDU", "2018-11-26", 02);
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("Développeur Web Front",  "/upload/video409DORLISCSS.mp4", "Vous travaillerez le full responsive avec le recueil des croquis offert par notre designer, les media queries ainsi que des connaisance en Bootstrap sont valorisés. Vous travaillerez en groupe de 3 personne répartit pour chaque client, le rémunération et de 1650€ brut, la plage horaire se situe autour de 39h par semaine.", "2018-11-07", 03);
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("RECHERCHE DEVELOPPEUR JAVASCRIPT",  "/upload/video410ROGERJS.mp4", "JE CHERCHE UN DEVELOPPEUR JAVASCRIPT ORIGINAL", "2018-11-28", 03);
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("Administrateur Réseau",  "/upload/video411BERTRANDHTML.mp4", "Poste en CDI a pourvoir, profil polyvalent recherché connaissances LAN, WAN. La maitrise des protocoles de sécurité des sevreurs web/base de données serait indispensables. Par groupe de 5, vous vous déplacerez vers le client afin d'offir vos services. Paie allant de 1500€ à 1780€ brut. Horaire allant de 35h a 42h.", "2018-11-08", 01);
INSERT INTO OFFRE(titre_offre, video_offre, desc_offre, date_limite, type_offre)
VALUES("Chef de Projet",  "/upload/video412LORISJAVA.mp4", "Niveau BAC +5, et une experience de 6 ans est demandé. Vous serez respponsable de 10 a 20 responsable réseau et développement. Rédaction et compte rendu de chaque reunions en accord avec les normes de l'entreprise que l'on vous communiquera. La rémunération est de 5500€ brut, a 40h par semaine.", "2018-11-09", 01);


-- DONNEES CANDIDATURE --
INSERT INTO CANDIDATURE(lettre_motiv, cv_candid, video_reponse)
VALUES("motivCharles.pdf", "cvCharles.pdf", "videoCharles.mp4");

-- DONNEES POSSEDER --
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(01, 01);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(02, 02);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(03, 03);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(04, 04);
INSERT INTO POSSEDER(id_comp, id_offre)
VALUES(05, 05);
