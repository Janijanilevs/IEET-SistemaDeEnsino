package systemEducation.Class;

public class Aluno extends Pessoa {
	private String periodoRef;
	private String matricula;
	private String curso;

	public Aluno(String periodoRef, String matricula, String curso, int id, String nome, String cpf, int dia, int mes,
			int ano) {
		super(id, nome, cpf, dia, mes, ano);
		this.periodoRef = periodoRef;
		this.matricula = matricula;
		this.curso = curso;
	}
}
