package systemEducation.Class;

import java.util.Arrays;

public class Turma {
	private String turno;
	private String nivelEscolar;
	private String anoLetivo;
	private Disciplina[] disciplinas;
	private Aluno[] alunos;
	private int numAlunos;
	private int numDisciplinas;
	
	//Funcionando
	
	public Turma(String turno,String nivelEscolar,String anoLetivo, int numMax, int numMaxDisciplinas) {
		this.turno = turno;
		this.nivelEscolar = nivelEscolar;
		this.anoLetivo = anoLetivo;
		this.numAlunos = 0;
		this.alunos = new Aluno[numMax];
		this.numDisciplinas = 0;
		this.disciplinas = new Disciplina[numMaxDisciplinas];
	}

	public String getTurno() {
		return turno;
	}

	public void setTurno(String turno) {
		this.turno = turno;
	}

	public String getNivelEscolar() {
		return nivelEscolar;
	}

	public void setNivelEscolar(String nivelEscolar) {
		this.nivelEscolar = nivelEscolar;
	}

	public String getAnoLetivo() {
		return anoLetivo;
	}

	public void setAnoLetivo(String anoLetivo) {
		this.anoLetivo = anoLetivo;
	}

	public Aluno[] getAlunos() {
		return alunos;
	}

	public void setAlunos(Aluno alunos, int numAluno) {
		this.alunos[numAluno] = alunos;
	}
	
	public int getNumAlunos() {
		return numAlunos;
	}

	public void setNumAlunos(int numAlunos) {
		this.numAlunos = numAlunos;
	}

	public Disciplina[] getDisciplinas() {
		return disciplinas;
	}

	public void setDisciplinas(Disciplina[] disciplinas) {
		this.disciplinas = disciplinas;
	}
	
	public int getNumDisciplinas() {
		return numDisciplinas;
	}

	public void setNumDisciplinas(int numDisciplinas) {
		this.numDisciplinas = numDisciplinas;
	}

	public void setAlunos(Aluno[] alunos) {
		this.alunos = alunos;
	}
	
	
	//Funções de adição de objeto funcionando corretamente
	
	public void addAlunos(Aluno aluno) {
		this.alunos[numAlunos] = aluno;
		this.numAlunos++;
	}
	public void addDisciplinas(Disciplina disciplina) {
		this.disciplinas[numDisciplinas] = disciplina;
		this.numDisciplinas++;
	}
	
	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return "Turma [Turno:" + turno + "\n NivelEscolar:" + nivelEscolar + "\n AnoLetivo:" + anoLetivo
				+ "\n Disciplinas: " + Arrays.toString(disciplinas) + " Alunos: " + Arrays.toString(alunos)
				+ "\n Número de Alunos:" + numAlunos + "\n Número de Disciplinas:" + numDisciplinas + "]";
	}
	
	
}
