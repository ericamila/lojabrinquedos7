create table brinquedo(
idbrinquedo int not null auto_increment,
descricao varchar(45),
valor numeric,
tipo varchar(45),
locado int,
primary key (idbrinquedo));

create table cliente(
idcliente int not null auto_increment,
nome varchar(45),
cpf varchar(14),
primary key (idcliente));

create table aluguel(
idaluguel int not null auto_increment,
qtbrinquedo int,
dataInicio date,
dataFim date,
idbrinquedo int not null,
idcliente int not null,
primary key (idaluguel));

alter table aluguel 
add constraint fk_idbrinquedo foreign key (idbrinquedo) 
references brinquedo(idbrinquedo),
add constraint fk_idcliente foreign key (idcliente)
references cliente (idcliente);