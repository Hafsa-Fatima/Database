insert into user_role (Name, description) values ('Administration','Administrator');
insert into user_role (Name, description) values  ('Teachers','Staff');
insert into user_role (Name, description) values  ('Students',NULL);

insert into user_account (Name,phone_no,role) values ('F. Hafsa','682-553-6098',101);
insert into user_account (Name,phone_no,role) values ('O. Asmita','282-553-6098',102);
insert into user_account (Name,phone_no,role) values ('F. Huda','382-553-6098',103);
insert into user_account (Name,phone_no,role) values ('S. Rachael','882-553-6098',101);
insert into user_account (Name,phone_no,role) values ('T. Velma','982-953-6098',102);
insert into user_account (Name,phone_no,role) values ('S. Aalam','682-553-6098',103);
insert into user_account (Name,phone_no,role) values ('M. Maryam','642-553-6098',101);
insert into user_account (Name,phone_no,role) values ('B. Lynda','680-553-6028',102);
insert into user_account (Name,phone_no,role) values ('M. Rose','682-553-6238',103);
insert into user_account (Name,phone_no,role) values ('P. Fin','682-553-5348',101);

insert into p_Privileges (privilege_col,privilege_type) values ('Create_table','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Drop','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Insert','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Delete','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Update','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Select','Relation');
insert into p_Privileges (privilege_col,privilege_type) values ('Create_view','Relation');

insert into tables values ('Assignment_Submits',1002);
insert into tables values ('Available_Course',1001);
insert into tables values ('DegreeMap',1001);
insert into tables values ('Marks',1008);
insert into tables values ('Prerequisite',1008);
insert into tables values ('Projects',1007);
insert into tables values ('Registered_course',1005);
insert into tables values ('Salary',1004);
insert into tables values ('Semester_course',1002);
insert into tables values ('Teaching_courses',1001);