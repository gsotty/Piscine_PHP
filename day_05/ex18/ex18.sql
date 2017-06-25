SELECT nom FROM distrib WHERE (id_distrib IN (42, 62, 63,64, 65, 66, 67, 68, 71, 88, 89, 90)) OR (nom LIKE '%y%y%'
OR nom LIKE '%Y%y%' OR nom LIKE '%y%Y%' OR nom LIKE '%Y%Y%') ORDER BY RAND() LIMIT 5 OFFSET 3;
