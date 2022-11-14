create schema `escola`;

create table `alunos` (
id primary key,int, auto incremental,
aluno varchar(255), not null,
cidade varchar(255), not null,
matricula varchar(255), not null,
);

insert alunos (aluno, cidade, matricula)
values ('Italo','Fortaleza','1');

insert into alunos (aluno, cidade, matricula)
values ('Levi','Caucaia','2');

insert into alunos (aluno, cidade, matricula)
values ('Alves','Maranguape','3');

insert into alunos (aluno, cidade, matricula)
values ('Lucas','Maranhao','4');

insert into alunos (aluno, cidade, matricula)
values ('Roberto','Fortaleza','5');

insert into alunos (aluno, cidade, matricula)
values ('Jardel','Canindé','6');

insert into alunos (aluno, cidade, matricula)
values ('Igor','Pedra Branca','7');