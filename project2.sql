Create table User_account (
user_id int not null, 
Name varchar(20) not null, 
phone_no char(12), 
role int not null, 
primary key(user_id));

Create table User_role (
role_no int not null, 
Name varchar(20) not null, 
description varchar(50), 
primary key(role_no));

Create table Tables (
Tname varchar(20) not null, 
user_id int not null, 
primary key(Tname, user_id));

Create table p_Privileges (
privilege_no int not null, 
privilege_col varchar(20) not null, 
privilege_type varchar (10) not null, 
primary key(privilege_no));

Create table Acc_role_privilege (
role_no int not null , 
privilege_no int not null, 
primary key(role_no, privilege_no));

Create table Relation_role_privilege (
privilege_no int not null,
Tname varchar(20) not null, 
user_id int not null, 
role int not null,
primary key( privilege_no, Tname,user_id, role));

alter table User_account add constraint uafk foreign key (role) references User_role (role_no);
alter table Tables add constraint tfk foreign key (user_id) references User_account (user_id);
alter table Relation_role_privilege add constraint rpfk1 foreign key (privilege_no) references p_Privileges (privilege_no);
alter table Relation_role_privilege add constraint rpfk2 foreign key (Tname,user_id) references Tables (Tname,user_id);
alter table Relation_role_privilege add constraint rpfk4 foreign key (role) references User_role (role_no);
alter table Acc_role_privilege add constraint apfk1 foreign key (role_no) references User_role (role_no);
alter table Acc_role_privilege add constraint apfk2 foreign key (privilege_no) references p_Privileges (privilege_no);


