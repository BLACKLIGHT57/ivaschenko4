CREATE TABLE users (
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
 name varchar(128) NOT NULL DEFAULT '',
 number varchar(20) NOT NULL DEFAULT '',
 mail varchar(128) NOT NULL DEFAULT '',
 date DATE,
 gen varchar(2) NOT NULL DEFAULT '',
 about varchar(300) NOT NULL DEFAULT '',
 pass varchar(128) NOT NULL DEFAULT '',
 login varchar(128) NOT NULL DEFAULT '',
 PRIMARY KEY(id)
);

CREATE TABLE lengs(
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
 leng varchar(20) NOT NULL DEFAULT '',
 PRIMARY KEY(id)
);

CREATE TABLE user_lengs(
id int(100) unsigned NOT NULL AUTO_INCREMENT,
user_id int(10) unsigned NOT NULL,
leng_id int(10) unsigned NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (leng_id) REFERENCES lengs(id)
);

CREATE TABLE admins(
 id int(10) unsigned NOT NULL AUTO_INCREMENT,
name varchar(255),
login varchar(255),
pass  int(10),
PRIMARY KEY(id)
);

INSERT INTO lengs (leng) VALUES ('pasc');

INSERT INTO  lengs (leng) VALUES ('c');

INSERT INTO  lengs (leng) VALUES ('c++');

INSERT INTO  lengs (leng) VALUES ('js');

INSERT INTO  lengs (leng) VALUES ('php');

INSERT INTO  lengs (leng) VALUES ('py');

INSERT INTO  lengs (leng) VALUES ('Java');

INSERT INTO  lengs (leng) VALUES ('Hask');

INSERT INTO lengs (leng) VALUES ('Cloj');

INSERT INTO  lengs (leng) VALUES ('Prol');

INSERT INTO  lengs (leng) VALUES ('Scarse');
