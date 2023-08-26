package systemEducation.Class;

public class Disciplina {
	private String nome;
	private String descricao;
	private Professor professor;
	
	public Disciplina(String nome, String descricao, Professor professor){
		this.nome = nome;
		this.descricao = descricao;
		this.professor = professor;
	}
	
	public String getNome() {
		return this.nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getDescricao() {
		return this.descricao;
	}
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	
	public Professor getProfessor() {
		return this.professor;
	}
	public void setProfessor(Professor professor) {
		this.professor = professor;
	}
	
	

	/*Criar função que retorna em porcentagem a frequencia de n aluno em n materia*/
	//Funcionando corretamente
	
	public void inserirFrequencia(Aluno aluno, float aulasDadas, float aulasFrequentadas) {
		if(aulasDadas > aulasFrequentadas) {
			float freq = aulasFrequentadas/aulasDadas;
			
			for(String arrayDisciplina : aluno.getDisciplina()) {
				int i = 0;
				if(arrayDisciplina.equals(getNome())) {
					aluno.addFrequencia(i,freq);
				}
				i++;
			}
			
		}else {
			System.out.printf( "As informações passadas estão incorretas ou este aluno não tem essa disciplina!");
		}
	}
	
	public void inserirNota(Aluno aluno, float nota) {
			
			for(String arrayDisciplina : aluno.getDisciplina()) {
				int i = 0;
				if(arrayDisciplina.equals(this.nome)) {
					aluno.addNota(i,nota);
				}
				i++;
			}
	}
	
	

	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return "\nDisciplina [Materia: " + nome + " - Descricao:" + descricao + " - Professor=" + professor + "]";
	}
	
	
	
}
