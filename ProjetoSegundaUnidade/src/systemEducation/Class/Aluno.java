package systemEducation.Class;

public class Aluno extends Pessoa {
	private String periodoRef;
	private String matricula;
	private String curso;

	public Aluno(String periodoRef, String matricula, String curso, int id, String nome, String cpf, int dia, int mes, int ano) {
		super(id, nome, cpf, dia, mes, ano);
		this.periodoRef = periodoRef;
		this.matricula = matricula;
		this.curso = curso;
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

	// Criar metodo que concatena o numero da matricula com o ano de incersão desse aluno Ex: 202215148
	
}
