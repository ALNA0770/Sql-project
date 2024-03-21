Drop Database L_08_nazarov_60299_bookstore;

Create Database L_08_nazarov_60299_bookstore;
Create Table L_08_nazarov_60299_bookstore.books(
    books_id integer not null auto_increment unique, 
    title varchar(70),
    author varchar(70),
    price double(5,2),
    primary key (books_id)

);
insert into L_08_nazarov_60299_bookstore.books(
    books_id,
    title,
    author,
    price
)
Values (1,  'Improve your skills','Lan Shon', '22'),
(2,  'An awesome Night ','Lan Shon', '34'),
(3,  'Paint and enjoy','Lan Shon', '81')
,(4,  'Hack skills','Lan Shon', '100');

