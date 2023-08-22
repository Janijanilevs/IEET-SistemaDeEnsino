package systemEducation.Class;
import java.util.Arrays;

public class Disciplina {
	private String nome;
	private String descricao;
	private Professor professor;
	private float notas[];
	
	Disciplina(String nome, String descricao, Professor professor){
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

	public float[] getNotas(int unidade) {
		return this.notas = new float[unidade];
	}
	public void setNotas(float[] notas) {
		this.notas = notas;
	}

	@Override
	public String toString() {
		return "Disciplina [nome=" + nome + ", descricao=" + descricao + ", professor=" + professor + ", notas="
				+ Arrays.toString(notas) + "]";
	}
	
	
	
}
