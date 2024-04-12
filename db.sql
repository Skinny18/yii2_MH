CREATE TABLE user (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    alergia_id INT,
    doenca_id INT,
    cirurgia_id INT,
    ist_id INT,
    diabetes VARCHAR(100),
    contato_emergencia1 VARCHAR(100),
    parentesco1 VARCHAR(100),
    contato_emergencia2 VARCHAR(100),
    parentesco2 VARCHAR(100),
    endereco_id INT,
    tipo_sangue VARCHAR(100),
    medicamento_id INT,
    historico_familiar VARCHAR(200),
    FOREIGN KEY (medicamento_id) REFERENCES medicamentos(id),
    FOREIGN KEY (endereco_id) REFERENCES enderecos(id),
    FOREIGN KEY (alergia_id) REFERENCES alergias(id),
    FOREIGN KEY (doenca_id) REFERENCES doencas(id),
    FOREIGN KEY (cirurgia_id) REFERENCES cirurgias(id),
    FOREIGN KEY (ist_id) REFERENCES ists(id)
);

CREATE TABLE enderecos (
    id SERIAL PRIMARY KEY,
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    cep INT,
    estado VARCHAR(100)
);


CREATE TABLE alergias (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100)
);

CREATE TABLE medicamentos (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100)
);

CREATE TABLE doencas (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100)
);

CREATE TABLE cirurgias (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100)
);

CREATE TABLE ists (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100)
);
