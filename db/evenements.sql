/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  06/08/2021 19:21:43                      */
/*==============================================================*/


drop table if exists Categorie;

drop table if exists Evenement;

drop table if exists Image;

drop table if exists Programme;

drop table if exists Type_Evenement;

drop table if exists Utilisateur;

drop table if exists Ville;

drop table if exists favori;

/*==============================================================*/
/* Table : Categorie                                            */
/*==============================================================*/
create table Categorie
(
   id_categorie         int not null,
   nom                  varchar(254),
   primary key (id_categorie)
);

/*==============================================================*/
/* Table : Evenement                                            */
/*==============================================================*/
create table Evenement
(
   id_evenement         int not null,
   id_type              int not null,
   id_ville             int not null,
   id_utilisateur       int not null,
   title_ev             varchar(254),
   description_ev       varchar(254),
   adresse              varchar(254),
   code_postal          int,
   duree_ev             int,
   date_entree          datetime,
   date_sortie          datetime,
   primary key (id_evenement)
);

/*==============================================================*/
/* Table : Image                                                */
/*==============================================================*/
create table Image
(
   id_image             int not null,
   id_evenement         int not null,
   nom_extension        varchar(254),
   primary key (id_image)
);

/*==============================================================*/
/* Table : Programme                                            */
/*==============================================================*/
create table Programme
(
   id_programme         int not null,
   id_evenement         int not null,
   heure                datetime,
   description          varchar(254),
   primary key (id_programme)
);

/*==============================================================*/
/* Table : Type_Evenement                                       */
/*==============================================================*/
create table Type_Evenement
(
   id_type              int not null,
   nom                  varchar(254),
   primary key (id_type)
);

/*==============================================================*/
/* Table : Utilisateur                                          */
/*==============================================================*/
create table Utilisateur
(
   id_utilisateur       int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   Image                varchar(254),
   role                 varchar(254),
   email                varchar(254),
   password             varchar(254),
   primary key (id_utilisateur)
);

/*==============================================================*/
/* Table : Ville                                                */
/*==============================================================*/
create table Ville
(
   id_ville             int not null,
   nom                  varchar(254),
   primary key (id_ville)
);

/*==============================================================*/
/* Table : favori                                               */
/*==============================================================*/
create table favori
(
   id_utilisateur       int not null,
   id_evenement         int not null,
   date_creation        datetime,
   primary key (id_utilisateur, id_evenement)
);

alter table Evenement add constraint FK_Association_11 foreign key (id_type)
      references Type_Evenement (id_type) on delete restrict on update restrict;

alter table Evenement add constraint FK_Association_6 foreign key (id_utilisateur)
      references Utilisateur (id_utilisateur) on delete restrict on update restrict;

alter table Evenement add constraint FK_Association_7 foreign key (id_ville)
      references Ville (id_ville) on delete restrict on update restrict;

alter table Image add constraint FK_Association_9 foreign key (id_evenement)
      references Evenement (id_evenement) on delete restrict on update restrict;

alter table Programme add constraint FK_Association_10 foreign key (id_evenement)
      references Evenement (id_evenement) on delete restrict on update restrict;

alter table favori add constraint FK_Association_8 foreign key (id_evenement)
      references Evenement (id_evenement) on delete restrict on update restrict;

alter table favori add constraint FK_Association_8 foreign key (id_utilisateur)
      references Utilisateur (id_utilisateur) on delete restrict on update restrict;

