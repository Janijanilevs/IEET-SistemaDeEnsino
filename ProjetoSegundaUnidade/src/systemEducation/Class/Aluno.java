package systemEducation.Class;

public class Aluno extends Pessoa {
	private String periodoRef;
	private String matricula;
	private String curso;
	private Disciplina disciplina;

	public Aluno(String periodoRef, String matricula, String curso, Disciplina disciplina, int id, String nome, String cpf, int dia, int mes, int ano) {
		super(id, nome, cpf, dia, mes, ano);
		this.periodoRef = periodoRef;
		this.matricula = matricula;
		this.curso = curso;
		this.disciplina = disciplina;
	}
	
}
