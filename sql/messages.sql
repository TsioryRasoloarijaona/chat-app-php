create table messages (
      msg_id int primary key auto-increment ,
      incoming_id int (200),
      outcoming_id int (200),
      msg text ,
      send_time timestamp default current_timestamp,
      files varchar (200)
);