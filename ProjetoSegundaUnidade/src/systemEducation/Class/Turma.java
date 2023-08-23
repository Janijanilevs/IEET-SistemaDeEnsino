package systemEducation.Class;

public class Turma {
	private String turno;
	private String nivelEscolar;
	private String anoLetivo;
	private String frequencia;
	private Aluno[] alunos;
	private int numAlunos;
	
	public Turma(String turno,String nivelEscolar,String anoLetivo, String frequencia, int numMax) {
		this.turno = turno;
		this.nivelEscolar = nivelEscolar;
		this.anoLetivo = anoLetivo;
		this.frequencia = frequencia;
		this.numAlunos = 0;
		this.alunos = new Aluno[numMax];
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
	
	public int getNumAlunos() {
		return numAlunos;
	}

	public void setNumAlunos(int numAlunos) {
		this.numAlunos = numAlunos;
	}

	public void addAlunos(Aluno aluno) {
		this.alunos[numAlunos] = aluno;
	}
	
	
}
