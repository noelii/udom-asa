create table charity_user
(
 userID int primary key auto_increment,
 userType varchar(10) not null
);
create table r_user
(
 r_userID int primary key auto_increment,
 phone varchar(20) not null,
 regDate date not null,
 regTime time not null,
 status varchar(10) not null
);
create table g_user
(
 autoId int primary key auto_increment,
 browser varchar(20) not null,
 IPaddr varchar(30) not null,
 accessTime time not null
);
create table targets
(
 targetID int primary key auto_increment,
 target_type varchar(10) not null
);
create table admin 
(
adminID int primary key auto_increment,
adminName varchar(20) not null,
email varchar(30) not null,
phone varchar(15) not null,
password varchar(255) not null
);
create table individual_target
(
 ind_ID int primary key auto_increment,
 targetID int not null,
 targetName varchar(100) not null,
 target_desc varchar(255),
 email varchar(50) not null,
 phone varchar(15) not null,
 password varchar(255) not null,
 office_location varchar(30) not null,
 adminID int not null,
constraint target_key foreign key(targetID) references targets(targetID) on delete cascade,
constraint admin_key foreign key(adminID) references admin(adminID) on delete cascade 
 
);
create table photo
(
 photoID int primary key auto_increment,
 photoURL varchar(20) not null

);
create table issues
(
 issueID int primary key auto_increment,
 title varchar(30) not null,
 description varchar(255) not null,
 userID int not null,
 targetID int not null,
 photoID int,
 location varchar(50) not null,
 issue_date date not null,
 issue_time time not null,
 status varchar(15) not null,
constraint user_key foreign key(userID) references r_user(r_userID) on delete cascade,
constraint target_key2 foreign key(targetID) references targets(targetID) on delete cascade,
constraint pic_key foreign key(photoID) references photo(photoID) on delete cascade
);
create table workgroup
(
 groupID int primary key auto_increment,
 targetID int not null,
 groupName varchar(50) not null,
 email varchar(35) not null,
 phone varchar(15) not null,
 office_location varchar(200),
 ind_ID int,
 constraint target_key3 foreign key(targetID) references targets(targetID) on delete cascade,
 constraint ind_key foreign key(ind_ID) references individual_target(ind_ID) on delete cascade 
);
create table updates
(
 updateID int primary key auto_increment,
 description varchar(255) not null,
 up_date date not null,
 up_time time not null,
 status varchar(10),
 userID int not null,
 issueID int not null,
 photoID int,
 constraint user_key2 foreign key(userID) references r_user(r_userID) on delete cascade,
 constraint issue_key foreign key(issueID) references issues(issueID) on delete cascade,
 constraint photo_key foreign key(photoID) references photo(photoID) on delete cascade
);

create table p_issues
(
 pi_ID int primary key auto_increment,
 p_issue varchar(50) not null,
 adminID int not null,
 constraint pi_key foreign key(adminID) references admin(adminID) on delete cascade
);
 
create table reports
(
 repID int primary key auto_increment,
 userID int not null, 
 pi_ID int not null,
 targetID int not null,
 repdate date not null,
 reptime time not null,
 location varchar(200) not null,
 constraint rep_user_key foreign key(userID) references charity_user(userID) on delete cascade,
 constraint pi_key2 foreign key(pi_ID) references p_issues(pi_ID) on delete cascade,
 constraint tag_key foreign key(targetID) references targets(targetID) on delete cascade
);
create table forwards
(
 fid int primary key auto_increment,
 issueID int not null,
 source_ID int not null,
 destin_ID int not null,
 fwd_date date not null,
 fwd_time time not null,
 constraint f_issue_key foreign key(issueID) references issues(issueID) on delete cascade,
 constraint source_key foreign key(source_ID) references targets(targetID) on delete cascade,
 constraint destin_key foreign key(destin_ID) references targets(targetID) on delete cascade

);
create table subtargets
(
 st_id int primary key auto_increment,
 ind_ID int not null,
 groupID int not null,
 status varchar(10),
 constraint s_ind_key2 foreign key(ind_ID) references individual_target(ind_ID) on delete cascade,
 constraint s_group_key2 foreign key(groupID) references workgroup(groupID) on delete cascade

);

create table feedbacks
(
 fb_ID int primary key auto_increment,
 feedback varchar(500) not null,
 issueID int not null,
 targetID int not null,
 fb_date date not null,
 fb_time time not null,
 status varchar(10) not null,
 constraint fb_issue_key3 foreign key(issueID) references issues(issueID) on delete cascade,
 constraint fb_tag_key3 foreign key(targetID) references targets(targetID) on delete cascade
);
create table p_feedbacks
(
 pf_ID int primary key auto_increment,
 feedback varchar(500) not null,
 repID int not null,
 targetID int not null,
 fb_date date not null,
 fb_time time not null,
 status varchar(10) not null,
 constraint rep_key foreign key(repID) references reports(repID) on delete cascade,
 constraint tag_key4 foreign key(targetID) references targets(targetID) on delete cascade
);










