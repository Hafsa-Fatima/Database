insert into user_role (Name, description) values ('admini','Administrator');
insert into user_role (Name, description) values  ('teacher','Staff');
insert into user_role (Name, description) values  ('student',NULL);

insert into user_account (Name,phone_no,role) values ('hafsa','682-553-6098',101);
insert into user_account (Name,phone_no,role) values ('asmita','282-553-6098',102);
insert into user_account (Name,phone_no,role) values ('huda','382-553-6098',103);
insert into user_account (Name,phone_no,role) values ('rachael','882-553-6098',101);
insert into user_account (Name,phone_no,role) values ('vamsi','982-953-6098',102);
insert into user_account (Name,phone_no,role) values ('alam','682-553-6098',103);
insert into user_account (Name,phone_no,role) values ('maryam','642-553-6098',101);
insert into user_account (Name,phone_no,role) values ('linda','680-553-6028',102);
insert into user_account (Name,phone_no,role) values ('rose','682-553-6238',103);
insert into user_account (Name,phone_no,role) values ('fin','682-553-5348',101);

insert into p_Privileges (privilege_col,privilege_type) values ('Create_table','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Drop','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Insert','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Delete','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Update','Account');
insert into p_Privileges (privilege_col,privilege_type) values ('Select','Relation');
insert into p_Privileges (privilege_col,privilege_type) values ('Create_view','Relation');

insert into tables values ('assignmentSubmits',1002);
insert into tables values ('available_course',1001);
insert into tables values ('degreeMap',1001);
insert into tables values ('marks',1008);
insert into tables values ('prerequisite',1008);
insert into tables values ('projects',1007);
insert into tables values ('registered_course',1005);
insert into tables values ('salary',1004);
insert into tables values ('semester_course',1002);
insert into tables values ('teaching_courses',1001);