insert into Bebidas values('Bubble_milk_tea', 80,'Es una bebida de té dulce aromatizada inventada en Taiwán.', 500)
insert into Bebidas values('Te_verde', 40,'El té verde es un producto derivado de la Camellia sinensis.', 500)
insert into Bebidas values('Cerveza', 50,'Bebida alcohólica, no destilada, de sabor amargo, que se fabrica con granos de cebada', 500)
insert into Bebidas values('Frappe', 70,'Café con hielo cubierto de espuma', 500)
insert into Bebidas values('Ramune', 40,'Bebida gaseosa vendida originalmente en Japón', 500)
insert into Bebidas values('Limonada', 40,'Bebida de elaboración usualmente casera, a base de limón, agua y azúcar', 500)
insert into Bebidas values('Agua', 30,'Gracias a su proceso de filtración a través del acuífero, contiene una gran cantidad de silicio', 500)
go


select * from Bebidas

insert into Postres values('Daifuku', 75.00,'Un dulce japonés consistente en un pequeño mochi', 500)
insert into Postres values('Crepas', 80.85,'Masa cocinada muy delgada a base de harina de trigo en forma de disco', 500)
insert into Postres values('Souffle_cheesecake', 180,'Este Cheesecake japones, esponjoso y húmedo, que utiliza merengue, es muy popular en Japón',500)
insert into Postres values('Taiyaki', 70.00,'El taiyaki es un pastel japonés con forma de pez', 500)
insert into Postres values('Arroz_con_leche', 70.71,'Hecho cociendo lentamente arroz con leche y azúcar',500)
insert into Postres values('Helado_tempura', 120,'Es sabroso de carácter, crujiente y muy cremoso.',500)
go

select * from Postres

insert into Platillos values('Dumplings', 300.10,'Empanadas originarias de la provincia de Cantón.', 500)
insert into Platillos values('Gyoza', 180.89,'Empanadilla consistente en masa rellena con carne y vegetales al vapor.', 500)
insert into Platillos values('Okonomiyaki', 270.50,'Masa con varios ingredientes cocinados a la plancha.', 500)
insert into Platillos values('Takoyaki', 240.25,'Bolas a base de harina de trigo y pulpo.', 500)
insert into Platillos values('Haru', 260.65,'Un alimento que consiste en un envoltorio de masa de trigo muy fina', 500)
insert into Platillos values('Ramen', 250.85,'Plato de fideos japonés.', 500)
insert into Platillos values('Onigiri', 185.80,'Bola de arroz rellena o mezclada con otros ingredientes.', 500)
go

select * from Platillos

select * from Reservacion

select * from Pedido

select * from Registros


select NumReservacion, count(*) NombrePila, ApellidoP,
ApellidoM, Correo, Fecha, NumPersonas
from Reservacion
group by NumReservacion, NombrePila, ApellidoP, ApellidoM, Correo, Fecha, NumPersonas, Telefono, Hora;

SELECT Email, Pass from Registros where Email = 'thiisaprueba@gmail.com' and Pass = 'qweasdzxc'

select * from Cliente



