USE cadastro;

CREATE TABLE usuarios(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(255) NOT NULL,
    telefone VARCHAR(255) Not NULL,
    nascimento DATE NOT NULL,
    sexo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO
    usuarios (
        nome,
        cpf,
        telefone,
        nascimento,
        sexo,
        email,
        senha
    )
VALUES
    (
        'Julia da Silva',
        '12345678901',
        '2199998521',
        '1987-07-1998',
        'Feminino',
        'juliads@gmail.com',
        SHA1('2321')
    );
  