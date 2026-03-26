CREATE table paciente(
    nome varchar(50) PRIMARY KEY NOT NULL,
    cpf int not null,
    idade int not null,
    peso float not null) ;
    
create TABLE medicamento(
    nome varchar(50) not null,
     doses int  not null,
     dias int  not null,
    paciente_nome varchar(50) not null REFERENCES paciente(nome) );

create table estoque(
    caixas int not null,
    doses_caixa int not null,
    preco float not null,
    tipo varchar(50),
    med_nome varchar(50) not null REFERENCES medicamento(nome));
    
    