SELECT gra, gru grupo,count(sex)Niñas,(select count(*) FROM estadistica.altas_alumnos where gra = 1 and gru = 'B') - count(sex
) niños  FROM estadistica.altas_alumnos
where sex ='femenino' and gra = 1 and gru = 'B'
group by gra,gru;


SELECT gra, gru grupo,count(sex) niñas FROM estadistica.altas_alumnos
 where sex = 'femenino'  group by gra,gru;
