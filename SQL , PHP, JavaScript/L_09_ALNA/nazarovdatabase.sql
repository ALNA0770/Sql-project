
Create Database L_09_nazarov_60299_cinema;
Create Table L_09_nazarov_60299_cinema.film(
    id integer not null auto_increment unique, 
    film_name  varchar(70),
    author varchar(70),
     Year smallint,
     duration smallint,
    primary key (id)

);

insert into L_09_nazarov_60299_cinema.film(
    id,
    film_name,
    author,
    Year,
    duration
)
Values (1,  'Till the End','Lan Shon', 2022,3 ),
(2,  'After death ','Joon', 2021, 2),
(3,  'Who am I?','BOB', 2020, 2.5)
,(4,  'Out of control','NOone',2019, 3 );

