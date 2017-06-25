SELECT UPPER(fiche_personne.nom) AS 'NOM', prenom, prix
FROM fiche_personne
JOIN membre ON fiche_personne.id_perso = membre.id_fiche_perso
JOIN abonnement ON membre.id_abo = abonnement.id_abo
WHERE abonnement.prix > 42 ORDER BY fiche_personne.nom, prenom;
