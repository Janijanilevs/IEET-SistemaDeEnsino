package systemEducation.Class;

import java.util.Arrays;
import javax.swing.JOptionPane;

public class Aluno extends Pessoa {
	private String periodoRef;
	private String matricula;
	private String[] disciplina;
	private int numDisciplinas;
	private float[] notas;
	private int numNotas;
	private float[] frequencia;
	private int numFrequencia;
	private boolean controle;

	public Aluno(String periodoRef, String matricula, int id, String nome, String cpf, String genero, int dia, int mes, int ano) {
		super(id, nome, cpf, genero, dia, mes, ano);
		this.periodoRef = periodoRef;
		this.matricula = matricula;
		this.controle = true;
		this.disciplina = new String[10];
		this.notas = new float[10];
		this.frequencia = new float[10];
		this.numDisciplinas = 0;
		this.numNotas = 0;
		this.numFrequencia = 0;
	}

	public String getPeriodoRef() {
		return periodoRef;
	}
	public String getMatricula() {
		return matricula;
	}
	public String[] getDisciplina() {
		return disciplina;
	}
	public float[] getNotas() {
		return notas;
	}
	public float[] getFrequencia() {
		return frequencia;
	}
	public boolean isControle() {
		return controle;
	}
	
	
	
	public void setPeriodoRef(String periodoRef) {
		this.periodoRef = periodoRef;
	}
	public void setMatricula(String matricula) {
		this.matricula = matricula;
	}

	public void setDisciplina(String[] disciplina) {
		this.disciplina = disciplina;
	}
	public void addDisciplina(String nome) {
		this.disciplina[this.numDisciplinas] = nome;
		this.numDisciplinas++;
	}
	
	public void setNotas(float[] notas) {
		this.notas = notas;
	}
	public void addNota(int pos, float nota) {
		this.notas[pos] = nota;
		this.numNotas++;
	}
	public void setFrequencia(float[] frequencia) {
		this.frequencia = frequencia;
	}
	public void addFrequencia(int pos, float freq) {
		this.frequencia[pos] = freq * 100;
		this.numFrequencia++;
	}
	public void setControle(boolean controle) {
		this.controle = controle;
	}
	


	// Criar metodo que concatena o numero da matricula com o ano de incersão desse aluno + seu Id Ex: 2022'1514'8
	//Funcionando corretamente
	public void adicionaAnoEId() {
		if(controle) {
			String ano = JOptionPane.showInputDialog(null, "Qual o ano de inserção deste aluno na escola?");
			this.matricula = ano + matricula + getId();
			JOptionPane.showMessageDialog(null,"Alterações realizadas!!");
			controle = false;
		}else {
			System.out.println("O ano ja foi inserido na matricula");
		}
	}
	
	public void mostrarNotas() {
		String stringconcatenada = " ";
		for(int i = 0; i < 10 ; i++) {
			stringconcatenada += "Disciplina: "+ disciplina[i] +" - "+ notas[i] + "\n";
		}
		JOptionPane.showMessageDialog(null, stringconcatenada);
	}
	
	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return "Aluno [Nome: " +getNome() +" - Periodo Referente:" + periodoRef + " - Matricula:" + matricula + " - Disciplina:"
				+ Arrays.toString(disciplina) + "\n Notas: " + Arrays.toString(notas) + " - Frequencia:"
				+ Arrays.toString(frequencia) + "]\n";
	}
	
}
