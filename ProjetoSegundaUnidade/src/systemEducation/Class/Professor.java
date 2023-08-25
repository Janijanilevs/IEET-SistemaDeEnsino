package systemEducation.Class;

public class Professor extends Pessoa {
	private String formacao;
	private int cargaHoraria;
	private float salario;

	public Professor(String formacao, int cargaHoraria, float salario, int id, String nome, String cpf, int dia, int mes, int ano) {
		super(id, nome, cpf, dia, mes, ano);
		this.formacao = formacao;
		this.cargaHoraria = cargaHoraria;
		this.salario = salario;
	}

	public String getFormacao() {
		return formacao;
	}

	public int getCargaHoraria() {
		return cargaHoraria;
	}

	public void setFormacao(String formacao) {
		this.formacao = formacao;
	}

	public void setCargaHoraria(int cargaHoraria) {
		this.cargaHoraria = cargaHoraria;
	}
	
	public float getSalario() {
		return salario;
	}

	public void setSalario(float salario) {
		this.salario = salario;
	}
	
	//Criar metodo que retorna o salario por hora baseado na carga horaria

	@Override
	public String toString() {
		return "O professor "+ this.getNome()+ " possui formação de :"+ formacao+ ", e carga horária na instituição de :" + cargaHoraria + " horas";
	}

}
