CREATE DATABASE Lab_10_Nazarov_60299_sold;
CREATE TABLE Lab_10_Nazarov_60299_sold.staff(
id integer not null auto_increment unique
,product_name varchar(50)
,spec varchar(150)
,img varchar(50)
,price double(7,2)
,primary key (id)
);

INSERT INTO Lab_10_Nazarov_60299_sold.products(
product_name
,spec
,img
,price
)
VALUES
("big dog","black ","imgnaz/1.jpg",312.55)
,("small dog","brown","imgnaz/2.jpg",448.66)
,("cat","lovely, white","imgnaz/3.jpg",686.33)
,("petty","black-white ","imgnaz/4.jpg",1326.77)
,("cat","careless petty","imgnaz/5.jpg",1861.11)
,("dog","Good for guarding your home","imgnaz/6.jpg",3123.44)
;