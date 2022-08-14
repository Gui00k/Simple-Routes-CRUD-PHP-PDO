
CREATE DATABASE [IF NOT EXISTS] database_name
[CHARACTER SET charset_name]
[COLLATE collation_name]

CREATE TABLE produto (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_prod VARCHAR(50),
    tipo VARCHAR(50),
    marca VARCHAR(50)
    tamanho VARCHAR(50),
    preco VARCHAR(50),
    descri VARCHAR(500)
  
    
);
