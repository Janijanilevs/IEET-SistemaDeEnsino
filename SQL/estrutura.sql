CREATE DATABASE IEET;
USE IEET;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
	data_nasc DATE NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    tipo INT NOT NULL
);

CREATE TABLE IF NOT EXISTS alunos(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
	FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);
CREATE TABLE IF NOT EXISTS professor(
	id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    total_ch INT,
    disciplina VARCHAR(50),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
CREATE TABLE IF NOT EXISTS notas(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT,
    nota1 FLOAT,
    nota2 FLOAT,
    nota3 FLOAT,
    FOREIGN KEY (id_aluno) REFERENCES alunos(id)
);
CREATE TABLE IF NOT EXISTS turma(
	id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT,
    professor_id INT,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id),
    FOREIGN KEY (professor_id) REFERENCES professor(id)
);
CREATE TABLE IF NOT EXISTS disciplina(
	id INT AUTO_INCREMENT PRIMARY KEY,
    turma_id INT,
    professor_id INT,
    nome VARCHAR(50) NOT NULL,
    ch_total INT NOT NULL,
    FOREIGN KEY (turma_id) REFERENCES turma(id),
    FOREIGN KEY (professor_id) REFERENCES professor(id)
);