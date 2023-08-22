package systemEducation.Class;

public class Turma {
	private String turno;
	private String nivelEscolar;
	private String anoLetivo;
	private String frequencia;
	private Aluno[] alunos;
	
	public Turma(String turno,String nivelEscolar,String anoLetivo, String frequencia, int numAlunos) {
		this.turno = turno;
		this.nivelEscolar = nivelEscolar;
		this.anoLetivo = anoLetivo;
		this.frequencia = frequencia;
		this.alunos = new Aluno[numAlunos];
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

	public String getFrequencia() {
		return frequencia;
	}

	public void setFrequencia(String frequencia) {
		this.frequencia = frequencia;
	}

	public Aluno[] getAlunos() {
		return alunos;
	}

	public void setAlunos(Aluno alunos, int numAluno) {
		this.alunos[numAluno] = alunos;
	}
	
	public void addAlunos(Aluno aluno) {
		static int num = 0;
		this.alunos[num] = aluno;
	}
	
	
}
