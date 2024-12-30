CREATE DATABASE CAR;
USE car;

 create table role (
     id_role INT AUTO_INCREMENT PRIMARY KEY,
     roleName varchar(20) NOT NULL
     );

create table utilisateur (
     id_user INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(255) NOT NULL,
     email varchar(255) UNIQUE NOT NULL,
     password text,
     role_id int,
     FOREIGN KEY (role_id) REFERENCES role(id_role) on delete cascade
     );

create table categorie (
     id_categorie INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(255) NOT NULL
     );          

create table vechicule (
     id_vechicule INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(255) NOT NULL,
     model varchar(255) NOT NULL,
     prix decimal NOT NULL,
     categorie_id int,
     FOREIGN KEY (categorie_id) REFERENCES categorie(id_categorie)
     );

create table reservation (
     id_reservation INT AUTO_INCREMENT PRIMARY KEY,
     user_id INT NOT NULL,
     vehicle_id INT NOT NULL,
     place_id INT NOT NULL,
     start_date DATE NOT NULL,
     end_date DATE NOT NULL,
     FOREIGN KEY (user_id) REFERENCES utilisateur(id_user),
     FOREIGN KEY (vehicle_id) REFERENCES vechicule(id_vechicule),
     FOREIGN KEY (place_id) REFERENCES place(id_place)
     );

 create table place (
     id_place INT AUTO_INCREMENT PRIMARY KEY,
     name varchar(255) not null
     );

CREATE TABLE reviews (
    id_reviews INT AUTO_INCREMENT PRIMARY KEY,
    vehicle_id INT NOT NULL,
    rating INT CHECK(rating BETWEEN 1 AND 5),
    comment TEXT,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES utilisateur(id_user),
    FOREIGN KEY (vehicle_id) REFERENCES vechicule(id_vechicule)
     );