#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_user     int (11) Auto_increment  NOT NULL ,
        pseudo      Varchar (25) ,
        mdp         Varchar (25) ,
        mail        Varchar (25) ,
        id_usertype Int ,
        id_ligue    Int ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Usertype
#------------------------------------------------------------

CREATE TABLE Usertype(
        id_usertype  int (11) Auto_increment  NOT NULL ,
        lib_usertype Varchar (25) ,
        description  Varchar (50) ,
        PRIMARY KEY (id_usertype )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ligue
#------------------------------------------------------------

CREATE TABLE Ligue(
        id_ligue int (11) Auto_increment  NOT NULL ,
        lib_lig  Varchar (25) ,
        PRIMARY KEY (id_ligue )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Faq
#------------------------------------------------------------

CREATE TABLE Faq(
        id_faq       int (11) Auto_increment  NOT NULL ,
        question     Varchar (50) ,
        reponse      Varchar (50) ,
        dat_question Date ,
        dat_reponse  Date ,
        id_user      Int ,
        PRIMARY KEY (id_faq )
)ENGINE=InnoDB;

ALTER TABLE User ADD CONSTRAINT FK_User_id_usertype FOREIGN KEY (id_usertype) REFERENCES Usertype(id_usertype);
ALTER TABLE User ADD CONSTRAINT FK_User_id_ligue FOREIGN KEY (id_ligue) REFERENCES Ligue(id_ligue);
ALTER TABLE Faq ADD CONSTRAINT FK_Faq_id_user FOREIGN KEY (id_user) REFERENCES User(id_user);
