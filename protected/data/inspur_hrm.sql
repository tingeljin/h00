/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2012/12/11 ÐÇÆÚ¶þ 14:00:40                      */
/*==============================================================*/


drop table if exists accommodation_management;

drop table if exists account_management;

drop table if exists config;

drop table if exists department;

drop table if exists dormitory_management;

drop table if exists it_resources;

drop table if exists job_changes;

drop table if exists lockers_management;

drop table if exists lockers_use;

drop table if exists recruitment_contact;

drop table if exists recruitment_main;

drop table if exists staff_main;

drop table if exists staff_post;

/*==============================================================*/
/* Table: accommodation_management                              */
/*==============================================================*/
create table accommodation_management
(
   accommodation_id     int not null auto_increment,
   staff_id             int,
   dormitory_id         int,
   accommodation_status int(1),
   key_situation        int(1),
   deposit_situation    int(2),
   check_in_time        int,
   check_out_time       int,
   update_time          int,
   create_user_id       int,
   update_user_id       int,
   other                varchar(150),
   primary key (accommodation_id)
);

/*==============================================================*/
/* Table: account_management                                    */
/*==============================================================*/
create table account_management
(
   staff_id             int,
   account_pc           varchar(30),
   account_im           varchar(30),
   account_email        varchar(30),
   register_time        int
);

/*==============================================================*/
/* Table: config                                                */
/*==============================================================*/
create table config
(
   setting_id           int(1) not null,
   age_config           varchar(100),
   recruitment_status   varchar(100),
   primary key (setting_id)
);

/*==============================================================*/
/* Table: department                                            */
/*==============================================================*/
create table department
(
   department_id        int not null auto_increment,
   department_name      int,
   department_introduction varchar(150),
   primary key (department_id)
);

/*==============================================================*/
/* Table: dormitory_management                                  */
/*==============================================================*/
create table dormitory_management
(
   dormitory_id         int not null auto_increment,
   dormitory_number     int(5),
   accommodate          int(1),
   other                varchar(150),
   primary key (dormitory_id)
);

/*==============================================================*/
/* Table: it_resources                                          */
/*==============================================================*/
create table it_resources
(
   staff_id             int,
   headset              varchar(8),
   call_box             varchar(8),
   quantity             int,
   status               int(1),
   receive_time         int,
   delivery_user_id     int,
   return_time          int,
   charge_user_id       int,
   other                varchar(150)
);

/*==============================================================*/
/* Table: job_changes                                           */
/*==============================================================*/
create table job_changes
(
   staff_id             int,
   job_changes_id       int not null auto_increment,
   staff_area_id        int(1),
   staff_room_id        int(1),
   department_id        int(1),
   staff_post_id        int(1),
   new_area_id          int(1),
   new_room_id          int(1),
   new_department_id    int(1),
   new_post_id          int(1),
   create_user_id       int,
   create_time          int,
   primary key (job_changes_id)
);

/*==============================================================*/
/* Table: lockers_management                                    */
/*==============================================================*/
create table lockers_management
(
   lockers_id           int not null auto_increment,
   lockers_number       int(4),
   lockers_use_status   int(1),
   lockers_key_status   int(1),
   lockers_sparekey_status int(1) default 1,
   other                varchar(150),
   primary key (lockers_id)
);

/*==============================================================*/
/* Table: lockers_use                                           */
/*==============================================================*/
create table lockers_use
(
   lockers_use_id       int not null auto_increment,
   lockers_id           int,
   staff_id             int,
   lockers_key_situation int(1),
   lockers_use_time     int,
   primary key (lockers_use_id)
);

/*==============================================================*/
/* Table: recruitment_contact                                   */
/*==============================================================*/
create table recruitment_contact
(
   contact_id           int not null auto_increment,
   recruitment_id       int,
   contact_time         int,
   contact_schedule     int(1),
   contact_status       int(1),
   communication_stuation int(1),
   reasons              varchar(50),
   appointment_time     int,
   interview_departments int(1),
   interview            int,
   contact_user_id      int,
   primary key (contact_id)
);

/*==============================================================*/
/* Table: recruitment_main                                      */
/*==============================================================*/
create table recruitment_main
(
   recruitment_id       int not null auto_increment,
   recruitment_name     varchar(10) not null,
   age                  int(1),
   contact_number       bigint(12) not null,
   user_status          int(1),
   educational_level    int(1),
   graduated_school     varchar(50),
   hometown             varchar(10),
   hometown_address     varchar(50),
   applied_position     int(1),
   source_types         int(2),
   source               varchar(50),
   channel              int(2),
   other                varchar(150),
   create_user_id       int,
   collect_time         int,
   update_user_id       int,
   update_time          int,
   primary key (recruitment_id)
);

/*==============================================================*/
/* Table: staff_main                                            */
/*==============================================================*/
create table staff_main
(
   staff_id             int not null auto_increment,
   recruitment_id       int,
   staff_inspur_id      varchar(30),
   staff_name           varchar(30),
   staff_en_name        varchar(30),
   staff_age            int(1),
   staff_contact_number bigint(12),
   staff_id_card        bigint(12),
   staff_work_status    int(1),
   source_types         int(2),
   source               varchar(50),
   bank_card            varchar(12),
   avatar_path          varchar(100),
   educational_level    int(1),
   graduated_school     varchar(50),
   hometown             varchar(10),
   hometown_address     varchar(50),
   emergency_contact    varchar(20),
   emergency_telephone  bigint(12),
   other                varchar(150),
   create_user_id       int,
   create_time          int,
   update_user_id       int,
   update_time          int,
   primary key (staff_id)
);

/*==============================================================*/
/* Table: staff_post                                            */
/*==============================================================*/
create table staff_post
(
   staff_id             int,
   staff_area_id        int(1),
   staff_room_id        int(1),
   staff_department_id  int(1),
   staff_post_id        int(1),
   entry_time           int,
   departure_time       int,
   probationary_period  int,
   contract_period      int
);

alter table accommodation_management add constraint FK_Relationship_10 foreign key (dormitory_id)
      references dormitory_management (dormitory_id) on delete restrict on update restrict;

alter table accommodation_management add constraint FK_Relationship_7 foreign key (staff_id)
      references staff_main (staff_id) on delete restrict on update restrict;

alter table account_management add constraint FK_Relationship_12 foreign key (staff_id)
      references staff_main (staff_id) on delete restrict on update restrict;

alter table it_resources add constraint FK_Relationship_13 foreign key (staff_id)
      references staff_main (staff_id) on delete restrict on update restrict;

alter table job_changes add constraint FK_Relationship_14 foreign key (staff_id)
      references staff_main (staff_id) on delete restrict on update restrict;

alter table lockers_use add constraint FK_Relationship_16 foreign key (lockers_id)
      references lockers_management (lockers_id) on delete restrict on update restrict;

alter table lockers_use add constraint FK_Relationship_9 foreign key (staff_id)
      references staff_main (staff_id) on delete restrict on update restrict;

alter table recruitment_contact add constraint FK_Relationship_2 foreign key (recruitment_id)
      references recruitment_main (recruitment_id) on delete restrict on update restrict;

alter table staff_main add constraint FK_Relationship_4 foreign key (recruitment_id)
      references recruitment_main (recruitment_id) on delete restrict on update restrict;

alter table staff_post add constraint FK_Relationship_6 foreign key (staff_id)
      references staff_main (staff_id) on delete restrict on update restrict;

