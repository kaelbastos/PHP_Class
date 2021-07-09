CREATE SCHEMA prova2DB;

USE prova2DB;

CREATE TABLE Aluno (
	nome varchar(40) not null, 
    matricula char(10) not null, 
    idade int not null, 
    curso varchar(60) not null, 
    grade char(4), 
    ira float default 10,
    cpf char(11),
    constraint cpf_pk primary key (cpf)
);

INSERT INTO Aluno(cpf, nome, matricula, idade, curso, grade) 
	VALUES ("00000000001","José Maria", "SC 0000001", 17, "ADS", "2018");
INSERT INTO Aluno(cpf, nome, matricula, idade, curso, grade) 
	VALUES ("00000000002","Maria José", "SC 0000002", 18, "TPG", "2008");

SELECT nome, matricula, idade, curso, grade, ira FROM Aluno;
