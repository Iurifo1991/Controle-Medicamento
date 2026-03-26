create database criar_banco;
 grant all PRIVILEGES on criar_banco.*TO
  'medico'@'localhost'identified by'medico';
 grant all PRIVILEGES on criar_banco.*TO
  'medico'@'%'identified by'medico';