drop sequence user_id_inc;
drop sequence priv_inc;
drop sequence role_inc;

drop trigger priv_trigger;
drop trigger role_trigger;
drop trigger user_acc_trig;

alter table Relation_role_privilege drop constraint rpfk1 ;
alter table Relation_role_privilege drop constraint rpfk2 ;
alter table Relation_role_privilege drop constraint rpfk4 ;
alter table Acc_role_privilege drop constraint apfk1 ;
alter table Acc_role_privilege drop constraint apfk2 ;
alter table Tables drop constraint tfk ;
alter table User_account drop constraint uafk; 

drop table user_account;
drop table user_role;
drop table tables;
drop table p_Privileges;
drop table Acc_role_privilege ;
drop table Relation_role_privilege;