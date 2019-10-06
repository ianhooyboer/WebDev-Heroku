use heroku_c799c9203bcbb61;

create table User (
	ID int(11) auto_increment,
    username varchar(26) not null,
    password varchar(50) not null,
    email varchar (26) not null,
    primary key(ID)
);

create table Videogame (
	ID int(11) auto_increment,
    name varchar(26),
    genre varchar(26),
    isCompetitive bit,
    
    PreferenceID int,
    foreign key(PreferenceID)
		References vgPreference(ID),
    
    primary key(ID)
);

create table Boardgame (
	ID int(11) auto_increment,
    name varchar(26),
    genre varchar(26),
    isCompetitive bit,
    avgPlaytime varchar(26),
    numPlayers varchar(26),
    
    PreferenceID int,
    foreign key(PreferenceID)
		References bgPreference(ID),
    
    primary key(ID)
);
 
create table vgPreference(
	ID int(11) auto_increment,
    competitive bit,
    guides bit,
    letsplay bit,
    reddit bit,
    reviews bit,
    streamers bit,
     
    primary key(ID)
);

create table bgPreference(
	ID int(11) auto_increment,
    competitive bit,
    guides bit,
    reddit bit,
    reviews bit,
     
    primary key(ID)
);

