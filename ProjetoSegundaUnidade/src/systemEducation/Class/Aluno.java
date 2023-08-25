package systemEducation.Class;

import java.util.Scanner;

public class Aluno extends Pessoa {
	private String periodoRef;
	private String matricula;
	private String curso;
	//private boolean controle;

	public Aluno(String periodoRef, String matricula, String curso, int id, String nome, String cpf, int dia, int mes, int ano) {
		super(id, nome, cpf, dia, mes, ano);
		this.periodoRef = periodoRef;
		this.matricula = matricula;
		this.curso = curso;
		//this.controle = true;
	}

	public String getPeriodoRef() {
		return periodoRef;
	}

	public void setPeriodoRef(String periodoRef) {
		this.periodoRef = periodoRef;
	}

	public String getMatricula() {
		return matricula;
	}

	public void setMatricula(String matricula) {
		this.matricula = matricula;
	}

	public String getCurso() {
		return curso;
	}

	public void setCurso(String curso) {
		this.curso = curso;
	}

	@Override
	public String toString() {
		return "Aluno [periodoRef=" + periodoRef + ", matricula=" + matricula + ", curso=" + curso + "]";
	}
	
	public void adicionaAno() {
		//static boolean controle = true;
		Scanner myObj = new Scanner(System.in);
		System.out.println("Qual o ano de inserção desta aluno na escola?");
		String ano = myObj.nextLine();
		this.matricula = ano + matricula;
	}
	// Criar metodo que concatena o numero da matricula com o ano de incersão desse aluno Ex: 202215148
	
}
