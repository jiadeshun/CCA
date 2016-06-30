create database cca; 

create table cca.org (
	
    id int (6) primary key not null auto_increment,
    orgName varchar (45) ,
    artificialPersonName varchar (45) ,
    city varchar (45) ,
    state varchar (45) ,
    orgLevel varchar (45) ,
    appliedDate varchar (45) ,
    runDuration varchar (45),
    respPerson varchar(45),
    respTitle varchar(45),
    respTele varchar(45),
    respEmail varchar(45),
    contPersonName varchar(45),
    contPhone varchar(45),
    account varchar(45),
    pssd varchar(45),
    created_at datetime (45)

);