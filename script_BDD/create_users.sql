USE hotel_menton;

CREATE TABLE users (
    id int auto_increment primary key not null,
    email varchar(50) not null,
    hash_pass varchar(255) not null,
    role varchar(25)
);

