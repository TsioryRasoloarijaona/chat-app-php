create table "users"(
    user_id int (11) primary key auto-increment,
    unique_id int (200),
    fname varchar (200),
    lname varchar  (200),
    email varchar (200),
    password varchar (200),
    img varchar (200)
);