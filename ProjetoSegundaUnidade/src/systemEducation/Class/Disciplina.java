package systemEducation.Class;
import javax.swing.JOptionPane;


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
	
	public void inserirFrequencia(Aluno aluno, int aulasDadas, int aulasFrequentadas) {
		if(aulasDadas > aulasFrequentadas) {
			float freq = (float)aulasFrequentadas/aulasDadas;
			int i = 0;
			for(String arrayDisciplina : aluno.getDisciplina()) {
				
				if(arrayDisciplina.equals(getNome())) {
					aluno.addFrequencia(i,freq);
				}
				i++;
			}
			JOptionPane.showMessageDialog(null, "Frequência inserida com sucesso!");
		}else {
			JOptionPane.showMessageDialog(null, "As informações passadas estão incorretas ou este aluno não tem essa disciplina!");
		}
	}
	
	public void inserirNota(Aluno aluno, float nota) {
		int i = 0;
			for(String arrayDisciplina : aluno.getDisciplina()) {
				if(arrayDisciplina.equals(this.nome)) {
					aluno.addNota(i,nota);
				}
				i++;
			}
			JOptionPane.showMessageDialog(null, "Nota inserida com sucesso!");
	}
	
	

	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return "\nDisciplina [Materia: " + nome + " - Descricao:" + descricao + " - Professor=" + professor + "]";
	}
	
	
	
}
