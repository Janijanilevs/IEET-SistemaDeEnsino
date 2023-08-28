USE IEET;

INSERT INTO usuarios (nome, email, data_nasc, tipo) VALUES
    ('João da Silva', 'joao@example.com', '1990-01-15', 1),
    ('Maria Souza', 'maria@example.com', '1995-05-20', 2),
    ('Ana Rodrigues', 'ana@example.com', '1992-09-10', 2),
    ('Pedro Almeida', 'pedro@example.com', '1988-03-25', 1),
    ('Sara Oliveira', 'sara@example.com', '1993-06-18', 2);

INSERT INTO alunos (id_usuario) VALUES
    (1),
    (2),
    (3),
    (4),
    (5);

INSERT INTO professor (usuario_id, total_ch, disciplina) VALUES
    (1, 40, 'Matemática'),
    (2, 30, 'História'),
    (3, 35, 'Física'),
    (4, 25, 'Literatura'),
    (5, 20, 'Biologia');

INSERT INTO notas (id_aluno, nota1, nota2, nota3) VALUES
    (1, 8.5, 7.2, 9.0),
    (2, 6.8, 7.5, 8.2),
    (3, 7.8, 9.1, 8.6),
    (4, 6.5, 8.9, 7.3),
    (5, 8.0, 7.4, 6.9);

INSERT INTO turma (aluno_id, professor_id) VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5);

INSERT INTO disciplina (turma_id, professor_id, nome, ch_total) VALUES
    (1, 1, 'Matemática', 60),
    (2, 2, 'História Medieval', 45),
    (3, 3, 'Física', 50),
    (4, 4, 'Literatura', 40),
    (5, 5, 'Biologia', 55);