create table users(
    id int auto_increment primary key,
    userid char(8) not null,
    username varchar(20) not null,
    college char(2),
    building varchar(20),
    room varchar(5),
    greennum float(10) default '0',
    lasttime datetime
)

create table records(
    id int auto_increment primary key,
    userid char(8),
    starttime date,
    endtime date,
    content varchar(255),
    total varchar(20),
    total varchar(20) not null,
    updatetime datetime
)