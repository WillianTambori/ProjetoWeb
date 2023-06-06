drop database if exists ulx;
create database ulx;
use ulx;

create table usuario
	(	id int not null auto_increment,
		nome varchar(100),
		sobrenome varchar(100),
		DataNasc date,
		cpf varchar(50),
		telefone varchar(50),
		endereco varchar(200),
		numero int,
		cep varchar(100),
		bairro varchar(100),
        cidade varchar(100),
		email varchar (100),
		senha varchar(50),
        foto varchar(100),
		primary key (id)
    );
    
create table produto
	(	cod int not null auto_increment,
		id int not null,
        nome varchar(100),
        marca varchar(100),
        modelo varchar(100),
        dataFabr date,
        descricao text,
        valor varchar(100),
        foto varchar(100),
        primary key(cod,id),
        foreign key(id) references usuario (id)
	);
        
#drop database ulx;

select * from produto;


        
    

