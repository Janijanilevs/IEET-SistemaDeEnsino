package systemEducation.Main;
import javax.swing.JOptionPane;
import systemEducation.Class.Professor;
import systemEducation.Class.Pessoa;
import systemEducation.Class.Direcao;
import systemEducation.Class.Aluno;
import systemEducation.Class.Disciplina;
import systemEducation.Class.Turma;

public class Sistema {
	public static void main(String[] args) {
		boolean sentinela = true;
		String opcao;
		int id;
		
		Aluno aluno1 = new Aluno("2º Semestre", "1515", 1, "João", "222.222.222-22", "M", 30, 8, 2005);
		Aluno aluno2 = new Aluno("1º Semestre", "1234", 2, "Maria", "111.111.111-11", "F", 20, 5, 2002);
		Aluno aluno3 = new Aluno("3º Semestre", "5678", 3, "Lucas", "333.333.333-33", "M", 25, 1, 2001);
		Aluno aluno4 = new Aluno("4º Semestre", "9876", 4, "Ana", "444.444.444-44", "F", 18, 10, 2003);
		Aluno aluno5 = new Aluno("2º Semestre", "5432", 5, "Pedro", "555.555.555-55", "M", 28, 12, 2000);
		Aluno aluno6 = new Aluno("1º Semestre", "6789", 6, "Carolina", "666.666.666-66", "F", 15, 6, 2004);
		Aluno aluno7 = new Aluno("3º Semestre", "4321", 7, "Gustavo", "777.777.777-77", "M", 12, 9, 2002);
		Aluno aluno8 = new Aluno("4º Semestre", "9870", 8, "Bruna", "888.888.888-88", "F", 9, 3, 2003);
		Aluno aluno9 = new Aluno("2º Semestre", "1122", 9, "Rafael", "999.999.999-99", "M", 5, 7, 2001);
		Aluno aluno10 = new Aluno("1º Semestre", "2468", 10, "Juliana", "123.123.123-12", "F", 10, 11, 2004);
		Aluno aluno11 = new Aluno("3º Semestre", "7890", 11, "Felipe", "234.234.234-23", "M", 22, 4, 2003);
        Aluno aluno12 = new Aluno("4º Semestre", "1357", 12, "Larissa", "345.345.345-34", "F", 14, 2, 2002);
        Aluno aluno13 = new Aluno("2º Semestre", "9876", 13, "Ricardo", "456.456.456-45", "M", 8, 9, 2005);
        Aluno aluno14 = new Aluno("1º Semestre", "5432", 14, "Amanda", "567.567.567-56", "F", 12, 7, 2001);
        Aluno aluno15 = new Aluno("3º Semestre", "2468", 15, "Diego", "678.678.678-67", "M", 3, 5, 2000);
        
        Aluno[] arrayAlunos = new Aluno[] { aluno1,aluno2,aluno3,aluno4,aluno5,aluno6,aluno7,aluno8,aluno9,aluno10,aluno11,aluno12,aluno13,aluno14,aluno15 };

		Professor prof1 = new Professor("Doutorado", 60, 2120, 16, "Janielcio", "222.222.222-22", "M", 14, 10, 1996);
        Professor prof2 = new Professor("Cursante", 13, 2345, 17, "Pablo", "112.432.432-54", "M", 23, 6, 1980);
        Professor prof3 = new Professor("Mestrado", 35, 3000, 18, "Maria", "333.333.333-33", "F", 15, 2, 1990);
        Professor prof4 = new Professor("Graduação", 28, 1800.75, 19, "Lucas", "444.444.444-44", "M", 2, 12, 1995);
        Professor prof5 = new Professor("Doutorado", 50, 2500.25, 20, "Carla", "555.555.555-55", "F", 20, 4, 1973);
        Professor prof6 = new Professor("Mestrado", 42, 2750.80, 21, "Fernanda", "666.666.666-66", "F", 10, 9, 1981);
        Professor prof7 = new Professor("Graduação", 32, 1900, 22, "Ricardo", "777.777.777-77", "M", 5, 3, 1989);
        Professor prof8 = new Professor("Cursante", 25, 2000.50, 23, "Patrícia", "888.888.888-88", "F", 8, 12, 1985);
        Professor prof9 = new Professor("Doutorado", 48, 2800.75, 24, "Henrique", "999.999.999-99", "M", 17, 7, 1975);
        Professor prof10 = new Professor("Graduação", 29, 1600, 25, "Ana", "123.123.123-12", "F", 24, 11, 1994);

        Professor[] arrayProfs = new Professor[] { prof1, prof2, prof3, prof4, prof5, prof6, prof7, prof8, prof9, prof10 };
		
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
        
        Direcao direcao1 = new Direcao("Diretor Geral", 50000, 15, 26, "Diretor1", "111.111.111-11", "M", 1, 1, 1990, arrayProfs);
        Direcao direcao2 = new Direcao("Diretor de Ensino", 50000, 15, 27, "Diretor2", "222.222.222-22", "F", 2, 2, 1991, arrayProfs);
        Direcao direcao3 = new Direcao("Diretor Administrativo", 50000, 15, 28, "Diretor3", "333.333.333-33", "M", 3, 3, 1992, arrayProfs);
        
        Direcao[] arrayDirecao = new Direcao[] {direcao1, direcao2, direcao3};
        
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
		
		do {
			id = 0;
			opcao = JOptionPane.showInputDialog(null,"Bem-Vindo ao IEET! \n Você deseja entrar como qual tipo de usuário?\n( 1 ) para aluno \n( 2 ) para professor \n( 3 ) para direção \n( 4 ) Para sair do programa");
			switch(opcao) {
				case "1": // Escolheu aluno
					id = Integer.parseInt(JOptionPane.showInputDialog(null,"Você escolheu alunos \nDigite seu ID: "));
					for(int i = 0; i < 15; i++) {
						if(arrayAlunos[i].getId() == id) {
							opcao = JOptionPane.showInputDialog(null,"Menu: \n ( 1 ) Para receber informações das turmas\n ( 2 ) Para receber informações sobre você \n ( 3 ) Ver suas notas\n ( 4 ) Para adicionar sua data de inscrição e id à sua matricula");
							switch(opcao) {
								case "1": // Informações sobre turma
									opcao = JOptionPane.showInputDialog(null, "Você deseja acessar que turma ? \n ( 1 ) Para turma 1 \n ( 2 ) Para turma 2 \n ( 3 ) Para turma 3");
									switch(opcao) {
										case "1":
											JOptionPane.showMessageDialog(null, turma1.toString());
											break;
										case "2":
											JOptionPane.showMessageDialog(null, turma2.toString());
											break;
										case "3":
											JOptionPane.showMessageDialog(null, turma3.toString());
											break;
										default:
											JOptionPane.showMessageDialog(null, "Valor Invalido");
											break;
									}
									break;
								case "2": // Informações sobre a pessoa
									JOptionPane.showMessageDialog(null, arrayAlunos[i].toString());
									break;
								case "3": // Ver suas notas
									arrayAlunos[i].mostrarNotas();
									break;
								case "4":
									arrayAlunos[i].adicionaAnoEId();
									break;
								default:
									JOptionPane.showMessageDialog(null, "Valor Invalido");
									break;
							} 
						}
						else if((id < 0 || id > 15) && i == 14) {
							JOptionPane.showMessageDialog(null,"Este id não foi encontrado no nosso banco de dados");
						}
					}
					break;
				
					
				case "2": // Escolheu Professor
					id = Integer.parseInt(JOptionPane.showInputDialog(null,"Você escolheu Professor \nDigite seu ID: "));
					for(int i = 0; i < 10; i++) {
						if(arrayProfs[i].getId() == id) {
							opcao = JOptionPane.showInputDialog(null,"Menu: \n ( 1 ) Para receber informações da turma \n ( 2 ) Para receber informações sobre você\n ( 3 ) Para inserir frequência de um aluno\n ( 4 ) Para inserir a nota de um aluno\n ( 5 ) Para receber seu salario/Hora");
							switch(opcao) {
								case "1": // Informações sobre turma
									opcao = JOptionPane.showInputDialog(null, "Você deseja acessar que turma ? \n ( 1 ) Para turma 1 \n ( 2 ) Para turma 2 \n ( 3 ) Para turma 3");
									switch(opcao) {
										case "1":
											JOptionPane.showMessageDialog(null, turma1.toString());
											break;
										case "2":
											JOptionPane.showMessageDialog(null, turma2.toString());
											break;
										case "3":
											JOptionPane.showMessageDialog(null, turma3.toString());
											break;
										default:
											JOptionPane.showMessageDialog(null, "Valor Invalido");
											break;
									}
									break;
								case "2":
									JOptionPane.showMessageDialog(null, arrayProfs[i].toString());
									break;
								case "3":
									int idDoAluno = 0, aulasDadas = 0, aulasParticipadas = 0;
									for(int j = 0; j <10; j++) {
										if(arrayDisciplinas[j].getProfessor() == arrayProfs[i]) {
											idDoAluno = Integer.parseInt(JOptionPane.showInputDialog(null, "Entre com o ID deste aluno: "));
											for(int z = 0; z < 15; z++) {
												if(arrayAlunos[z].getId() == idDoAluno) {
													aulasDadas = Integer.parseInt(JOptionPane.showInputDialog(null, "Entre com a quantidade de aulas dadas por você: "));
													aulasParticipadas = Integer.parseInt(JOptionPane.showInputDialog(null, "Entre com a quantidade de aulas participadas pelo aluno."));
													arrayDisciplinas[j].inserirFrequencia(arrayAlunos[z], aulasDadas, aulasParticipadas);
												}
												else if((idDoAluno < 0 || idDoAluno > 15) && i == 14) {
													JOptionPane.showMessageDialog(null, "Este Id não foi encontrado no nosso banco de dados!");
												}
											}
											
										}
									}
									break;
								case "4":
									float notas = 0;
									for(int j = 0; j <10; j++) {
										if(arrayDisciplinas[j].getProfessor().getId() == arrayProfs[i].getId()) {
											idDoAluno = Integer.parseInt(JOptionPane.showInputDialog(null, "Entre com o ID deste aluno: "));
											for(int z = 0; z < 15; z++) {
												if(arrayAlunos[z].getId() == idDoAluno) {
													notas = Float.parseFloat(JOptionPane.showInputDialog(null, "Entre com a nota desse aluno"));
													arrayDisciplinas[j].inserirNota(arrayAlunos[z], notas);
												}
												else if((idDoAluno < 0 || idDoAluno > 15) &&  z == 14) {
													JOptionPane.showMessageDialog(null, "Este Id não foi encontrado no nosso banco de dados!");
												}
											}	
										}
									}
									break;
								case "5":
									arrayProfs[i].valorPorHora();
									break;
								default:
									JOptionPane.showMessageDialog(null, "Valor Invalido");
									break;
							}
						}
						else if((id < 16 || id > 25) && i == 9) {
							JOptionPane.showMessageDialog(null,"Este id não foi encontrado no nosso banco de dados");
						}	
					}
					break;	
				case "3": // Escolheu Direção
					id = Integer.parseInt(JOptionPane.showInputDialog(null,"Você escolheu: Direção \nDigite seu ID: "));
					for(int i = 0; i < 3; i++) {
						if(arrayDirecao[i].getId() == id) {
							opcao = JOptionPane.showInputDialog(null,"Menu: \n ( 1 ) Para receber informações sobre o orçamento destinado aos professores \n ( 2 ) Para receber informações sobre você ");
							switch(opcao) {
								case "1": // Informações sobre orçamento destinados aos professores
									arrayDirecao[i].orcamentoStatus();
									break;
								case "2": // Informações sobre a pessoa
									JOptionPane.showMessageDialog(null, arrayDirecao[i].toString());
									break;
								default:
									JOptionPane.showMessageDialog(null, "Valor Invalido");
									break;
							} 
						}
						else if((id < 26 || id > 28) && i == 2) {
							JOptionPane.showMessageDialog(null,"Este id não foi encontrado no nosso banco de dados");
						}	
					}
					break;
				case "4":
					sentinela = false;
					break;
				default:
					JOptionPane.showMessageDialog(null, "Valor Invalido");
					break;
			}
		}while(sentinela);
		
	}
}
