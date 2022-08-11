-- Creo la base de datos 
create database YokosKitchen;

-- Uso la base de datos
use YokosKitchen
go

/*
-- Creamos la tabla para la entidad Cliente
create table Cliente(
  NumCliente int primary key identity,
  NombrePila varchar(30) not null,
  ApellidoP varchar(30) not null,
  ApellidoM varchar(30) not null,
  Calle varchar(30) not null,
  NumExt varchar(10) not null,
  Colonia varchar(30) not null,
  NumTel varchar(30) not null,
  Email varchar(60) not null,
)
go
*/

create table Cliente(
  NumCliente int primary key identity,
  NombrePila varchar(30) not null,
  ApellidoP varchar(30) not null,
  ApellidoM varchar(30) not null,
  Calle varchar(30) not null,
  NumExt varchar(10) not null,
  Colonia varchar(30) not null,
  NumTel varchar(30) not null,
  Email varchar(60) not null,
  DescripcionDireccion varchar(200)

)
go

alter table Cliente add Pass varchar(25) null
go

select * from Cliente;

/*
alter table Cliente 
drop constraint [FK__Cliente__NumClie__4F47C5E3]

alter table Cliente drop column OrderID
go
*/



select * from Cliente;


-- Tabla para la entidad Pedido
create table Pedido(
  NumPedido int primary key identity,
  Fecha datetime
)
go



select * from Pedido;

select * from PlatillosDelPedido



alter table Pedido add
FOREIGN KEY (NumPedido) REFERENCES BebidasDelPedido(NumCons)



-- Tabla para la entidad Bebidas
create table Bebidas(
  NumBebida int primary key identity,
  Nombre varchar(30),
  Precio float not null, 
  Descripcion varchar(100),
  Stock int
)
go

select * from Bebidas;



-- Tabla para la entidad Platillos
create table Platillos(
  NumPlatillo int primary key identity,
  Nombre varchar(30),
  Precio float,
  Descripcion varchar(100)
)

-- Tabla para la entidad Postres
create table Postres(
  NumPostre int primary key identity,
  Nombre varchar(30),
  Precio float
)
go

select * from Postres;

alter table Postres add Descripcion varchar(150)
go

alter table Postres add Stock int
go



create table Reservacion(
  NumReservacion int primary key identity,
  NombrePila varchar(30) not null,
  ApellidoP varchar(30) not null,
  ApellidoM varchar(30) not null,
  Correo varchar(30) not null,
  Fecha datetime not null,
  NumPersonas int not null
)
go


select * from MesasReservacion;



alter table Reservacion add Hora time not null
go



/*
alter table Reservacion add Telefono varchar(15) not null
go
*/

insert into Reservacion values('Link', 'In', 'Park', 'zelda@outlook.com', '11/17/2021', 3, '6647709858', '6:12');
/*
-- Insertar los registros en cada tabla
select * from Bebidas;

insert into Bebidas values('Te', 40.00,'El té es la infusión de las hojas y brotes de la planta del té.',350);
insert into Bebidas values('Te_verde', 40.00,'Proviene de la planta Camellia sinensis, es el tipo de té no fermentado.',380);
insert into Bebidas values('Boba_milk_tea', 80.00,'El ingrediente que le da su nombre son las perlas de tapioca, un almidón que viene de la yuca.',270);
insert into Bebidas values('Sake', 405.60,'Se obtiene de la fermentación del arroz. En su composición, lleva un 20 % de arroz y un 80% agua.',60);
insert into Bebidas values('Cerveza', 59.71,'Bebida alcohólica obtenida mediante fermentación de un mosto dulce, a base de cereales germinados.',200);
insert into Bebidas values('Malteada_fresa', 79.50,'Es una bebida elaborada a base de leche y helado.',310);
insert into Bebidas values('Malteada_Vainilla', 79.50,'Es una bebida elaborada a base de leche y helado.',310);
insert into Bebidas values('Cafe', 50.00,'Bebida hecha de los granos tostados y molidos de los frutos de la planta del café.',400);
insert into Bebidas values('Frappe', 80.50,'Es un café con hielo cubierto de espuma.',120);
insert into Bebidas values('Chai', 85.00,'Es una mezcla de té con especias y hierbas aromáticas.',150);
insert into Bebidas values('Ramune_azul', 60.00,'El Ramune es una bebida gaseosa vendida originalmente en Japón.',180);
insert into Bebidas values('Ramune_verde', 60.00,'El Ramune es una bebida gaseosa vendida originalmente en Japón.',185);
insert into Bebidas values('Ramune_rosa', 60.00,'El Ramune es una bebida gaseosa vendida originalmente en Japón.',170);
insert into Bebidas values('Limonada', 40.00,'Bebida de elaboración usualmente casera, a base de limón.',350);
insert into Bebidas values('Calpis', 80.00,'Bebida con cierto toque parecido al de la leche, y ligero sabor ácido, similar al yogur natural.',160);
insert into Bebidas values('Coca_Cola_original', 30.00,'Refresco sabor cola',550);
insert into Bebidas values('Fanta_Naranja', 30.00,'Refresco sabor naranja',400);
insert into Bebidas values('Fanta_melon', 30.00,'Refresco sabor melón',255);
insert into Bebidas values('Fanta_uva', 30.00,'Refreso sabor uva',230);
insert into Bebidas values('Pepsi_original', 30.00,'Bebida gaseosa sabor cola',450);
insert into Bebidas values('Agua', 25.00,'Agua natural fresca',500);
insert into Bebidas values('Agua_mineral', 25.00,'Agua mineralizada',480);
*/
/*
-- Registros para los Platillos
select * from Platillos;

insert into Platillos values('Dumplings', 50.00,'Empanadas originarias de la provincia de Cantón.',null);
insert into Platillos values('Sushi', 180.00,'Comida japonesa a base de pescado crudo y arroz',null);
insert into Platillos values('Teriyaki', 180.00,'Carne asada en un adobo de salsa dulce.',null);
insert into Platillos values('Onigiri', 160.00,'Bola de arroz rellena o mezclada con otros ingredientes.',3);
insert into Platillos values('Yakimeshi', 160.00,'Arroz frito japonés',null);
insert into Platillos values('Brochetas_de_queso', 160.00,'Bloques de queso manchego en un palo',4);
insert into Platillos values('Yakitori', 180.77,'Brocheta de pollo japonesa',4);
insert into Platillos values('Sopa_miso', 160.00,'Sopa japonesa preparada a base de un caldo dashi y pasta de miso.',null);
insert into Platillos values('Ramen', 220.20,'Plato de fideos japonés.', null);
insert into Platillos values('Yakisoba', 160.10,'Tallarines fritos originarios de china.', null);
insert into Platillos values('Takoyaki', 180.00,'Bolas a base de harina de trigo y pulpo.',6);
insert into Platillos values('Camaron_tempura', 160.00,'Camarones empanizados',4);
insert into Platillos values('Okonomiyaki', 250.25,'Masa con varios ingredientes cocinados a la plancha.',null);
insert into Platillos values('Tsukune', 180.00,'Albóndiga de pollo japonesa cocinada al estilo yakitori.',3);
insert into Platillos values('Oden', 160.00,'Huevo, daikon, konnyaku y chikuwa, cocidos en un caldo de konbu y katsuobushi.',null);
insert into Platillos values('Monjayaki', 160.00,'Rebozado japonés frito en sartén con diversos ingredientes.',null);
insert into Platillos values('Tonkatsu', 160.65,'Chuleta de cerdo de un centímetro de ancho empanada y frita, troceada.',null);
insert into Platillos values('Negiyaki', 150.55,'Preparación parecida al okonomiyaki pero que usa negi.',null);
insert into Platillos values('Soba', 150.00,'Fideos finos que se sirven fríos con una salsa en la que se sumergen.',null);
insert into Platillos values('Kushikatsu', 180.00,'Brochetas con pollo, carne, cerdo, pescado y/o vegetales de temporada.',3);
insert into Platillos values('Tamagoyaki', 155.00,'Tortilla de huevo', null);
insert into Platillos values('Sashimi', 165.00,'Platillo de pescado crudo, cortado en trozos.', null);
insert into Platillos values('Sukiyaki', 265.85,'Consiste en carne o en la versión vegetariana hecha de tofu, cocido a fuego lento.',null);
insert into Platillos values('Natto', 155.00,'Alimento milenario procedente de Japón, muy nutritivo y de fácil digestión.',null);
insert into Platillos values('Nikuyaga', 160.00,'Estofado tradicional de la cocina japonesa.',null);
insert into Platillos values('Curry', 170.51,'Mezcla de especias, más o menos picantes sobre una cama de arroz.',null);
insert into Platillos values('Gyoza', 165.70,'Empanadilla consistente en masa rellena con carne y vegetales al vapor.',5);
insert into Platillos values('Tofu', 155.00,'Comida de origen oriental, preparada con semillas de soja.',null);
insert into Platillos values('Yakiniku', 250.10,'Orden de carne cocinada a la parrilla', null);
insert into Platillos values('Omurice',180.90,'Plato japonés contemporáneo consistente en una tortilla hecha con arroz frito',null);

select * from Platillos;
*/
/*
-- Agregar Registros para la tabla Postres

select * from Postres;
insert into Postres values('Anmitsu', 75.00,'Se elabora con pequeños cubos de agar-agar, una gelatina blanca traslúcida',null);
insert into Postres values('Anpan', 55.00,'Un bollo dulce japonés relleno con anko',null);
insert into Postres values('Dango', 80.00,'Dumpling tradicional japonés elaborado con mochiko',3);
insert into Postres values('Daifuku', 50.00,'Dulce japonés consistente en un pequeño mochi', null);
insert into Postres values('Pastel_de_fresa', 90.95,'La base es una capa de pastaflora​ untada de confite', null);
insert into Postres values('Pastel_de_matcha', 100.00,'Mezcla en una taza el yogurt griego, vainilla y huevo',null);
insert into Postres values('Pastel_de_chocolate', 90.90,'Es un postre conocido internacionalmente',null);
insert into Postres values('Cheesecake', 120.10,'Hecho a base de ricota, requesón, queso quark y azúcar',);
insert into Postres values('Pastel_de_Moras', 120.90,'Pastel compuesto de relleno de moras',null);
insert into Postres values('Crepas', 90.00,'Receta europea de origen francés', null);
insert into Postres values('Helado_tempura', 120.00,'Helado frito muy popular en Asia',null);
insert into Postres values('Banana_split', 120.00,'Postre principalmente hecho de helado y banano',null);
insert into Postres values('Banana_tempura', 120.00,'Postre tradicional que se encuentra en los restaurantes estilo asiático de colombia',6);
insert into Postres values('Hot_Cakes', 80.00,'Es una torta plana, redonda y salada o dulce',3);
insert into Postres values('Taiyaki', 70.95,'Pastel japonés con forma de pez',null);
insert into Postres values('Dorayaki', 40.00,'dulce japonés que consiste en dos bizcochos',null);
insert into Postres values('Manju', 60.00,'Es un tipo de wagashi tradicional',2);
insert into Postres values('Wagashi', 70.00,'Dulce tradicional japonés',null);
insert into Postres values('Ikinari_dango', 60.00,'Delicioso snack japonés',null);
insert into Postres values('Moon_cake', 25.00,'Pastelillos pequeños, suaves y redondos',null);
insert into Postres values('Kibi_dango', 60.00,'Mochi elaborado con masa de arroz',3);
insert into Postres values('Castella', 60.00,'bizcocho japonés hecho con azúcar, harina y huevo',null);
insert into Postres values('Kashi_pan', 30.00,'Especialidad de repostería japonesa',null);
insert into Postres values('Flan', 50.00,'Postre hecho con natilla',null);
insert into Postres values('Souffle', 60.00,'plato ligero elaborado al horno',null);
insert into Postres values('Pudin', 80.00,'Tipo de pastel dulce elaborado con diferentes ingredientes',null);
insert into Postres values('Monaka', 35.00,'wagashi hecho con un relleno de judía azuki',null);
insert into Postres values('Arroz_Con_Leche', 40.00,'Postre típico en muchos paises',null);
*/


-- Insertar datos en la tabla 'Cliente'
select * from Cliente;
select * from Pedido;
select * from Platillos;
select * from Bebidas;
select * from Postres;
select * from Reservacion;

insert into Cliente values('David','Sanchez','Garcia','Martires',224,'De Chicago','6648881549','alan@gmail.com','Casa grande y porton negro', null);

select Email, Pass from Cliente where Email = 'Link@gmail.com' and Pass = 'Link123';

insert into Platillos values('Dumplings', 300.10,'Empanadas originarias de la provincia de Cantón.', 500)
insert into Platillos values('Gyoza', 180.89,'Empanadilla consistente en masa rellena con carne y vegetales al vapor.', 500)
insert into Platillos values('Okonomiyaki', 270.50,'Masa con varios ingredientes cocinados a la plancha.', 500)
insert into Platillos values('Takoyaki', 240.25,'Bolas a base de harina de trigo y pulpo.', 500)
insert into Platillos values('Haru', 260.65,'Un alimento que consiste en un envoltorio de masa de trigo muy fina', 500)
insert into Platillos values('Ramen', 250.85,'Plato de fideos japonés.', 500)
insert into Platillos values('Onigiri', 185.80,'Bola de arroz rellena o mezclada con otros ingredientes.', 500)
go


insert into Postres values('Daifuku', 75.00,'Un dulce japonés consistente en un pequeño mochi', 500)
insert into Postres values('Crepas', 80.85,'Masa cocinada muy delgada a base de harina de trigo en forma de disco', 500)
insert into Postres values('Souffle_cheesecake', 180,'Este Cheesecake japones, esponjoso y húmedo, que utiliza merengue, es muy popular en Japón',500)
insert into Postres values('Taiyaki', 70.00,'El taiyaki es un pastel japonés con forma de pez', 500)
insert into Postres values('Arroz_con_leche', 70.71,'Hecho cociendo lentamente arroz con leche y azúcar',500)
insert into Postres values('Helado_tempura', 120,'Es sabroso de carácter, crujiente y muy cremoso.',500)
go

insert into Bebidas values('Bubble_milk_tea', 80,'Es una bebida de té dulce aromatizada inventada en Taiwán.', 500)
insert into Bebidas values('Te_verde', 40,'El té verde es un producto derivado de la Camellia sinensis.', 500)
insert into Bebidas values('Cerveza', 50,'Bebida alcohólica, no destilada, de sabor amargo, que se fabrica con granos de cebada', 500)
insert into Bebidas values('Frappe', 70,'Café con hielo cubierto de espuma', 500)
insert into Bebidas values('Ramune', 40,'Bebida gaseosa vendida originalmente en Japón', 500)
insert into Bebidas values('Limonada', 40,'Bebida de elaboración usualmente casera, a base de limón, agua y azúcar', 500)
insert into Bebidas values('Agua', 30,'Gracias a su proceso de filtración a través del acuífero, contiene una gran cantidad de silicio', 500)
go


-- Crear tabla llamada Pedidos_de_bebidas
create table BebidasDelPedido(
  NumCons int primary key not null,
  Cantidad int null,
  Importe float null 

  FOREIGN KEY (NumCons) REFERENCES Bebidas(NumBebida)
)
go


select * from BebidasDelPedido

select * from Pedido;
select * from Bebidas;
select * from Platillos;
select * from Postres;

drop table MesasReservacion

select * from MesasReservacion

select * from BebidasDelPedido;

delete from BebidasDelPedido;


-- Se ingresa la cantidad de una bebida que se va a comprar asi como su precio
insert into BebidasDelPedido values(7, 11, null)

insert into BebidasDelPedido values(2, 3, null)

insert into BebidasDelPedido values(6, 1, null)


create trigger TR_Bebidas_Stock
on BebidasDelPedido
for delete
as
update Bebidas set Stock = Bebidas.Stock-deleted.Cantidad
from Bebidas 
join deleted
on deleted.NumCons = Bebidas.NumBebida;
go

-- Esta instruccion activa el trigger y se resta la cantidad del stock
delete from BebidasDelPedido where NumCons = 1

delete from BebidasDelPedido where NumCons = 7

delete from BebidasDelPedido where NumCons = 2

delete from BebidasDelPedido where NumCons = 6

-----------------------------------------------------
-- Tabla que se relaciona entre Postres y Pedidos para crear el trigger

create table PostresDelPedido(
NumPostresDelPedido int primary key not null,
Cantidad int null,
Importe float null

-- Llave foránea que relaciona la tabla PostresDelPedido con Bebidas
  FOREIGN KEY(NumPostresDelPedido) REFERENCES Postres(NumPostre)
)



/*
alter table Pedido add
FOREIGN KEY (NumPedido) REFERENCES PostresDelPedido(NumPostresDelPedido)
go
*/



select * from Postres;
select * from PostresDelPedido;

-- Trigger para restar el stock de Postres

create trigger TR_Postres_Stock
on PostresDelPedido
for delete
as
update Postres set Stock = Postres.Stock-deleted.Cantidad
from Postres 
join deleted
on deleted.NumPostresDelPedido = Postres.NumPostre;
go



-- Se inserta en el postre la cantidad a elegir
insert into PostresDelPedido values(7, 2, null)

insert into PostresDelPedido values(9, 5, null)


-- Se elimina del Stock de Postres la cantidad
delete from PostresDelPedido where NumPostresDelPedido = 7

delete from PostresDelPedido where NumPostresDelPedido = 9

------------------------------------------------------------
select * from Cliente;
select * from Pedido;
select * from Platillos;
select * from Bebidas;
select * from Postres;
select * from Reservacion;

select * from BebidasDelPedido;
select * from PostresDelPedido;


insert into PostresDelPedido values(6, 2, null)

delete from PostresDelPedido where NumPostresDelPedido = 9

delete from PostresDelPedido

insert into PostresDelPedido values(9, 5, null)

-------------------------------------------------------------

/*
   Alterar la tabla Pedido para relacionar el NumPedido con la PK de PlatillosDelPedido
*/
/*
alter table Pedido add 
FOREIGN KEY(NumPedido) REFERENCES PlatillosDelPedido(NumPlatillosDelPedido)
go
*/
/*
select * from Platillos

update Platillos
set Platillos.Stock = 500
*/
/*
create trigger TR_PlatillosDelPedido
on PlatillosDelPedido
for delete
as
update Platillos set Stock = Platillos.Stock-deleted.Cantidad
from Platillos
join deleted
on deleted.NumPlatillosDelPedido = Platillos.NumPlatillo
go
*/

select * from BebidasDelPedido;
insert into BebidasDelPedido values(7, 5, null)
delete from BebidasDelPedido;


select * from Platillos;
select * from PlatillosDelPedido;

create table PlatillosDelPedido(
NumPlatillosDelPedido int primary key not null,
Cantidad int null,
Importe float null

  FOREIGN KEY(NumPlatillosDelPedido) REFERENCES Platillos(NumPlatillo)
)

insert into PlatillosDelPedido values(6, 5, null)

insert into PlatillosDelPedido values(1, 10, null)

select * from Platillos;

select * from PlatillosDelPedido;

delete from PlatillosDelPedido;

------------------------------------------------------------

select * from Cliente

select * from PostresDelPedido;
select * from BebidasDelPedido;
select * from PlatillosDelPedido;

select * from Postres;
select * from Bebidas;
select * from Platillos;

delete from PostresDelPedido;
delete from BebidasDelPedido;
delete from PlatillosDelPedido;

/*
create trigger TR_PlatillosDelPedido
on PlatillosDelPedido
for delete
as
update Platillos set Stock = Platillos.Stock-deleted.Cantidad
from Platillos
join deleted
on deleted.NumPlatillosDelPedido = Platillos.NumPlatillo
go
*/


------------------------------------------------------------
-- Trigger para restar el stock de las bebidas

create trigger TR_Bebidas_Stock
on BebidasDelPedido
for delete
as
update Bebidas set Stock = Bebidas.Stock-deleted.Cantidad
from Bebidas
join deleted
on deleted.NumCons = Bebidas.NumBebida
go

select * from Bebidas;



select * from Postres;
select * from PostresDelPedido;

-- Trigger para sacar el total de un postre
create trigger TR_TotalPostres
on PostresDelPedido
for insert
as
update PostresDelPedido set Importe = Postres.Precio * PostresDelPedido.Cantidad
from Postres
where Postres.NumPostre = PostresDelPedido.NumPostresDelPedido
go

select * from Reservacion;



select * from Postres;
select * from PostresDelPedido;

insert into PostresDelPedido values(6, 5, 75)

insert into PostresDelPedido values(9, 4, 70)

insert into PostresDelPedido values(11, 2, 120)

delete from PostresDelPedido;



-- Trigger para sacar el total de una Bebida
select * from Bebidas;
select * from BebidasDelPedido;

create trigger TR_TotalBebidas
on BebidasDelPedido
for insert
as
update BebidasDelPedido set Importe = Bebidas.Precio * BebidasDelPedido.Cantidad
from Bebidas
where Bebidas.NumBebida = BebidasDelPedido.NumCons
go





-- Trigger para sacar el total de los Platillos

select * from Platillos;
select * from PlatillosDelPedido;

create trigger TR_TotalPlatillos
on PlatillosDelPedido
for insert
as
update PlatillosDelPedido set Importe = Platillos.Precio * PlatillosDelPedido.Cantidad
from Platillos
where Platillos.NumPlatillo = PlatillosDelPedido.NumPlatillosDelPedido
go


-- Trigger para sumar todas las ordenes

select * from Postres;
select * from Bebidas;
select * from Platillos;

select * from Pedido;
select * from Cliente;

select * from PostresDelPedido;
select * from BebidasDelPedido;
select * from PlatillosDelPedido;

delete from PostresDelPedido;
delete from BebidasDelPedido;
delete from PlatillosDelPedido;

select SUM(Importe) as Total
from PlatillosDelPedido
go

----------------------------------------------------------------------------------------
-- Vista para mostrar la cantidad total de cada una de las tablas en PlatillosDelPedido,
-- BebidasDelPedido y PostresDelPedido
create view Vista_TotalDeOrdenes as
select SUM(Importe) as [Total] from PlatillosDelPedido
UNION ALL
select SUM(Importe) from BebidasDelPedido
UNION ALL
select SUM(Importe) from PostresDelPedido

--Vista para sacar el total de todas las ordenes
select SUM(Total) as Total from Vista_TotalDeOrdenes

select SUM(Total) from Vista_TotalDeOrdenes

select * from Vista_TotalDeOrdenes;

------------------------------------------------------------------------------------------
select * from Cliente;
select * from Postres;
select * from PostresDelPedido;

update Postres set Stock = Postres.Stock+5
where NumPostre = 6
delete from PostresDelPedido;


--------------------------------------------------------
select * from Reservacion;
delete from Reservacion where Correo = 'Kiwi@gmail.com';


-------------------------------------------------------
-- log in
select Email, pass from Cliente where Email = 'Link@gmail.com' and pass = 'Link123';

select * from Cliente;

----------------------------------------------------------
/*
    Crear tabla llamada Registros
*/

create table Registros(
NumRegistro int primary key identity,
NombrePila varchar(30),
ApellidoP varchar(30),
ApellidoM varchar(30),
Telefono varchar(15),
Email varchar(40)
)

alter table Registros add Pass varchar(20)

select * from Registros;

insert into Registros values('Isra','Ramirez','Sepulveda','6648885517','isra@gmail.com','123')

SELECT Email, Pass from Registros where Email = 'isra@gmail.com' and Pass = '123456789'


--------------------------------

select * from Platillos;
select * from PlatillosDelPedido;
select * from PostresDelPedido;
select * from BebidasDelPedido;

select * from Cliente;

-----------------------------------------------

select * from Reservacion;

delete from Reservacion where Correo = 'marco@gmail.com'



----------------------------------------------------------

select * from Pedido;
select SUM(Total) from Vista_TotalDeOrdenes

insert into Pedido values('11/25/2021', '10:45', (select SUM(Total) from Vista_TotalDeOrdenes))


create table PedidoPrueba(
NumeroP int primary key identity,
Fecha date,
Hora datetime,
Total varchar(20)
)

insert into PedidoPrueba values('11/25/2021', '10:45', (select SUM(Total) from Vista_TotalDeOrdenes))

select * from PedidoPrueba;

-------------------------------------------------------------------

select * from Reservacion;
select * from Registros;

select * from Platillos;
select * from Bebidas;
select * from Postres;

select * from BebidasDelPedido
UNION ALL
select * from PlatillosDelPedido
UNION ALL
select * from PostresDelPedido

delete from PlatillosDelPedido;
delete from BebidasDelPedido;
delete from PostresDelPedido;

select * from PostresDelPedido;


select SUM(Total) as Total from Vista_TotalDeOrdenes



--------------------------------------------

select * from BebidasDelPedido
UNION ALL
select * from PlatillosDelPedido
UNION ALL
select * from PostresDelPedido

select * from Postres;
select * from Platillos;
select * from Bebidas;
/*
create view ResumenPedido as
select Postres.Nombre,Cantidad, Importe
from PostresDelPedido
inner join Postres on Postres.NumPostre = PostresDelPedido.NumPostresDelPedido
UNION ALL
select Bebidas.Nombre, Cantidad, Importe 
from BebidasDelPedido
inner join Bebidas on Bebidas.NumBebida = BebidasDelPedido.NumCons
UNION ALL
select Platillos.Nombre,Cantidad, Importe
from PlatillosDelPedido
inner join Platillos on Platillos.NumPlatillo = PlatillosDelPedido.NumPlatillosDelPedido
go
*/

select SUM(Total) as Total from Vista_TotalDeOrdenes

select * from PlatillosDelPedido;

select * from ResumenPedido;

select * from BebidasDelPedido;

select * from Registros;
select * from Pedido;


select Nombre, Cantidad, Importe 
from ResumenPedido as Total
group by Nombre, Cantidad, Importe


/*
-----------------------------------------------------------
-- Trigger para restar platillos del stock

create trigger TR_PlatillosDelPedido
on PlatillosDelPedido
for delete
as
update Platillos set Stock = Platillos.Stock-deleted.Cantidad
from Platillos
join deleted
on deleted.NumPlatillosDelPedido = Platillos.NumPlatillo
go

select * from Platillos;
select * from PlatillosDelPedido;

*/


select * from Registros;
select * from Reservacion;
select * from MesasReservacion;
select * from Pedido;



select * from Pedido;
select * from Registros;
select * from Reservacion;

select NumReservacion, NombrePila, ApellidoP, ApellidoM, Correo, Fecha, NumPersonas, Telefono, Hora
from Reservacion
go

SELECT Fecha FROM Reservacion;

select * from Reservacion

exec sp_columns Reservacion

select * from Platillos;
select * from Bebidas;
select * from Postres;

select * from PlatillosDelPedido;
select * from BebidasDelPedido;
select * from PostresDelPedido;

select * from Cliente;

/******************************************************/

select NumCliente as NumPedido
from Cliente

alter table Cliente add Fecha datetime
go

alter table Cliente add Total float


select * from Cliente;

select * from Vista_TotalDeOrdenes;


/*
insert into Cliente values('Israel', 'Ramirez', 'Sepulveda', 'Sweet', 117, 'Dreams', '6648885151',
'isra@gmail.com', 'Portón negro, auto rojo afuera', GETDATE(), (select SUM(Total) as Total from Vista_TotalDeOrdenes));
*/

insert into Cliente values('Israel', 'Ramirez', 'Sepulveda', 'Sweet', 117, 'Dreams', '6648885151',
'isra@gmail.com', 'Portón negro, auto rojo afuera', (select SUM(Total) as Total from Vista_TotalDeOrdenes));

select * from Platillos;


---------------------------------------------------------------------------------
-- Vista para consultar absolutamente todas las ordenes de las tablas Pedido, Bebidas y Postres
-- (Código del producto, Nombre, Cantidad y el Importe por cada producto conforme a la cantidad)
create view ResumenPedidoID as
select Postres.NumPostre as CodigoProducto,Postres.Nombre,Cantidad, Importe
from PostresDelPedido
inner join Postres on Postres.NumPostre = PostresDelPedido.NumPostresDelPedido
UNION ALL
select Bebidas.NumBebida,Bebidas.Nombre, Cantidad, Importe 
from BebidasDelPedido
inner join Bebidas on Bebidas.NumBebida = BebidasDelPedido.NumCons
UNION ALL
select Platillos.NumPlatillo,Platillos.Nombre,Cantidad, Importe
from PlatillosDelPedido
inner join Platillos on Platillos.NumPlatillo = PlatillosDelPedido.NumPlatillosDelPedido
go

select * from ResumenPedidoID;


select * from Platillos;
select * from Postres;
select * from Bebidas;

select * from Cliente;


select * from Reservacion;


select * from Registros;

------------------------------------

select * from Cliente;


select * from Bebidas;
select * from BebidasDelPedido;

select * from Platillos;
select * from PlatillosDelPedido;

select * from Postres;
select * from PostresDelPedido;

select * from Registros;
select * from Reservacion;

-------------------------------------

select count(*) as [Total de Clientes] from Cliente;


select count(*) as [Total de Bebidas] from Bebidas;


select count(*) as [Total de BebidasDelPedido] from BebidasDelPedido;


select count(*) as [Total de Platillos] from Platillos;


select count(*) as [Total de PlatillosDelPedido] from PlatillosDelPedido;


select count(*) as [Total de Postres] from Postres;


select count(*) as [Total de PostresDelPedido] from PostresDelPedido;

select count(*) as [Total de Registros] from Registros;

	
select count(*) as [Total de Reservaciones] from Reservacion;



select * from Cliente;

select * from Postres;
select * from Bebidas;
select * from Platillos;

select * from PostresDelPedido;
select * from BebidasDelPedido;
select * from PlatillosDelPedido;

select * from Registros;
select * from Reservacion;

-- Vistas
select * from ResumenPedidoID;

select SUM(Total) as Total from Vista_TotalDeOrdenes



