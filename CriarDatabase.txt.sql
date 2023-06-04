drop database if exists ulx;
create database ulx;
use ulx;

create table usuario
	(	id int not null auto_increment,
		nome varchar(30),
		sobrenome varchar(30),
		DataNasc date,
		cpf varchar(30),
		telefone varchar(30),
		endereco varchar(30),
		numero int,
		cep varchar(30),
		bairro varchar(30),
        cidade varchar(30),
		email varchar (30),
		senha varchar(30),
		primary key (id)
    );
    
create table produto
	(	cod int not null auto_increment,
		id int not null,
        nome varchar(30),
        marca varchar(30),
        modelo varchar(30),
        dataFabr date,
        descricao varchar(30),
        valor varchar(30),
        foto varchar(30),
        primary key(cod,id),
        foreign key(id) references usuario (id)
	);
        
#drop database ulx;

select * from produto;


        
    

