package systemEducation.Main;
import systemEducation.Class.Professor;
import systemEducation.Class.Pessoa;
import systemEducation.Class.Direcao;
import systemEducation.Class.Aluno;
import systemEducation.Class.Disciplina;
import systemEducation.Class.Turma;

public class Sistema {
	public static void main(String[] args) {
		
		
		
		Aluno aluno1 = new Aluno("2º Semestre", "1515", 4, "João", "222.222.222-22", "M", 30, 8, 2005);
		Aluno aluno2 = new Aluno("1º Semestre", "1234", 3, "Maria", "111.111.111-11", "F", 20, 5, 2002);
		Aluno aluno3 = new Aluno("3º Semestre", "5678", 2, "Lucas", "333.333.333-33", "M", 25, 1, 2001);
		Aluno aluno4 = new Aluno("4º Semestre", "9876", 1, "Ana", "444.444.444-44", "F", 18, 10, 2003);
		Aluno aluno5 = new Aluno("2º Semestre", "5432", 4, "Pedro", "555.555.555-55", "M", 28, 12, 2000);
		Aluno aluno6 = new Aluno("1º Semestre", "6789", 3, "Carolina", "666.666.666-66", "F", 15, 6, 2004);
		Aluno aluno7 = new Aluno("3º Semestre", "4321", 2, "Gustavo", "777.777.777-77", "M", 12, 9, 2002);
		Aluno aluno8 = new Aluno("4º Semestre", "9870", 1, "Bruna", "888.888.888-88", "F", 9, 3, 2003);
		Aluno aluno9 = new Aluno("2º Semestre", "1122", 4, "Rafael", "999.999.999-99", "M", 5, 7, 2001);
		Aluno aluno10 = new Aluno("1º Semestre", "2468", 3, "Juliana", "123.123.123-12", "F", 10, 11, 2004);
		Aluno aluno11 = new Aluno("3º Semestre", "7890", 2, "Felipe", "234.234.234-23", "M", 22, 4, 2003);
        Aluno aluno12 = new Aluno("4º Semestre", "1357", 1, "Larissa", "345.345.345-34", "F", 14, 2, 2002);
        Aluno aluno13 = new Aluno("2º Semestre", "9876", 4, "Ricardo", "456.456.456-45", "M", 8, 9, 2005);
        Aluno aluno14 = new Aluno("1º Semestre", "5432", 3, "Amanda", "567.567.567-56", "F", 12, 7, 2001);
        Aluno aluno15 = new Aluno("3º Semestre", "2468", 2, "Diego", "678.678.678-67", "M", 3, 5, 2000);
        
        Aluno[] arrayAlunos = new Aluno[] { aluno1,aluno2,aluno3,aluno4,aluno5,aluno6,aluno7,aluno8,aluno9,aluno10,aluno11,aluno12,aluno13,aluno14,aluno15 };

		Professor prof1 = new Professor("Doutorado", 60, 2120, 15, "Janielcio", "222.222.222-22", "M", 14, 10, 1996);
        Professor prof2 = new Professor("Cursante", 13, 2345, 12, "Pablo", "112.432.432-54", "M", 43, 6, 1980);
        Professor prof3 = new Professor("Mestrado", 35, 3000, 8, "Maria", "333.333.333-33", "F", 15, 2, 1990);
        Professor prof4 = new Professor("Graduação", 28, 1800.75, 5, "Lucas", "444.444.444-44", "M", 2, 12, 1995);
        Professor prof5 = new Professor("Doutorado", 50, 2500.25, 20, "Carla", "555.555.555-55", "F", 20, 4, 1973);
        Professor prof6 = new Professor("Mestrado", 42, 2750.80, 10, "Fernanda", "666.666.666-66", "F", 10, 9, 1981);
        Professor prof7 = new Professor("Graduação", 32, 1900, 6, "Ricardo", "777.777.777-77", "M", 5, 3, 1989);
        Professor prof8 = new Professor("Cursante", 25, 2000.50, 7, "Patrícia", "888.888.888-88", "F", 8, 12, 1985);
        Professor prof9 = new Professor("Doutorado", 48, 2800.75, 18, "Henrique", "999.999.999-99", "M", 17, 7, 1975);
        Professor prof10 = new Professor("Graduação", 29, 1600, 4, "Ana", "123.123.123-12", "F", 24, 11, 1994);

        Professor[] arrayProfs = new Professor[] { prof1, prof2, prof3, prof4, prof5, prof6, prof7, prof8, prof9, prof10 };
		
		Direcao d1 = new Direcao("Diretor Geral",50000,30,101,"Paulo","222.222.222-22", "M",30,8,2005,arrayProfs);
		
        Disciplina disc1 = new Disciplina("Matemática", "MAT101", prof1);
        Disciplina disc2 = new Disciplina("História", "HIS201", prof2);
        Disciplina disc3 = new Disciplina("Biologia", "BIO301", prof3);
        Disciplina disc4 = new Disciplina("Física", "FIS401", prof4);
        Disciplina disc5 = new Disciplina("Inglês", "ING501", prof5);
        Disciplina disc6 = new Disciplina("Química", "QUI601", prof6);
        Disciplina disc7 = new Disciplina("Geografia", "GEO701", prof7);
        Disciplina disc8 = new Disciplina("Literatura", "LIT801", prof8);
        Disciplina disc9 = new Disciplina("Artes", "ART901", prof9);
        Disciplina disc10 = new Disciplina("Educação Física", "EDF101", prof10);
		
        Disciplina[] arrayDisciplinas = new Disciplina[] { disc1,disc2,disc3,disc4,disc5,disc6,disc7,disc8,disc9,disc10, };
		
        Turma turma1 = new Turma("Manhã", "Ensino Médio", "2023", 15, 10);
        Turma turma2 = new Turma("Tarde", "Ensino Fundamental", "2023", 15, 12);
        Turma turma3 = new Turma("Noite", "Ensino Médio", "2023", 15, 18);
        
		for(int i = 0; i < 15 ; i++) { //Esse for esta sendo utilizado para inserir alunos nas turmas
			if(i < 5) {
				turma1.addAlunos(arrayAlunos[i]);
			}
			else if(i >= 10) {
				turma3.addAlunos(arrayAlunos[i]);
			}
			else if(i>=5 && i < 10){
				turma2.addAlunos(arrayAlunos[i]);
			}
		}
		for(int i = 0 ; i < 3 ; i++) { // Inserindo disciplinas nas turmas
			turma1.addDisciplinas(arrayDisciplinas[i]);
			turma2.addDisciplinas(arrayDisciplinas[i]);
			turma3.addDisciplinas(arrayDisciplinas[i]);
		}
		for(int i = 0 ; i < 15 ; i++) { // Inserindo disciplinas nos alunos
			for(int j = 0 ; j < 10 ; j++) { 
				arrayAlunos[i].addDisciplina(arrayDisciplinas[j].getNome());
			}
		}
		
		/*
		aluno1.adicionaAno();
        System.out.println("---------------------");
        System.out.println(aluno1.getMatricula());
        System.out.println("---------------------");
        aluno1.adicionaAno();
        System.out.println();*/
		
		/*
		disc1.inserirFrequencia(aluno1, 10, 5);
		disc1.inserirNota(aluno1, 7.5f);
		
		System.out.println(aluno1.toString());*/
		
		//System.out.println(prof1.getData().retornaIdadeInt());Esses comandos são os que estão com
		//System.out.println(aluno1.getData().retornaIdadeInt());Problemas de data
		
		
		
		
		
		
        
	}
}
