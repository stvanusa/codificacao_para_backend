SELECT * FROM clientes;


select nome, idade from clientes;


select nome, cidade from clientes where cidade = 'são paulo';

select * from clientes where idade > 30;


select nome, email from clientes where email like '%gmail.com%';


select nome, email from clientes where email like '%gmail.com';


select count(*) from clientes;

select nome from clientes where id = 3;

select nome, idade from clientes where idade >= 25 AND idade <=35;

SELECT * from clientes where cidade != 'Rio de Janeiro';

SELECT * from clientes order by idade ASC ;
