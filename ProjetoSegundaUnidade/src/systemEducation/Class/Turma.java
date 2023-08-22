package systemEducation.Class;

public class Turma {
	private String turno;
	private String nivelEscolar;
	private String anoLetivo;
	private String frequencia;
	private Aluno[] aluno;
	
	public Turma(String turno,String nivelEscolar,String anoLetivo, String frequencia, int numAlunos) {
		this.turno = turno;
		this.nivelEscolar = nivelEscolar;
		this.anoLetivo = anoLetivo;
		this.frequencia = frequencia;
		
	}
}
