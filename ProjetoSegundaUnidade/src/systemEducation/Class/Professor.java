package systemEducation.Class;

public class Professor extends Pessoa {
	private String formacao;
	private int cargaHoraria;
	private double salario;

	public Professor() {
		super(0, "", "", "", 0, 0, 0);
		this.formacao = "";
		this.cargaHoraria = 0;
		this.salario = 0;
	}
	
	public Professor(int id, String nome, String cpf, String genero, int dia, int mes, int ano) {
		super(id, nome, cpf, genero, dia, mes, ano);
		this.formacao = "";
		this.cargaHoraria = 0;
		this.salario = 0;
	}
	
	public Professor(String formacao, int cargaHoraria, double salario, int id, String nome, String cpf, String genero, int dia, int mes, int ano) {
		super(id, nome, cpf, genero, dia, mes, ano);
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
	
	public double getSalario() {
		return this.salario;
	}

	public void setSalario(double salario) {
		this.salario = salario;
	}
	
	
	
	//Criar metodo que retorna o salario por hora baseado na carga horaria
	//Funcionando corretamente
	public void valorPorHora() {
		double valor = salario/cargaHoraria;
		System.out.printf( "O salario/hora de " + getNome() + " é: R$ %.2f",valor);
	}
	
	
	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return "O professor "+ this.getNome()+ " possui formação de :"+ formacao+ ", e carga horária na instituição de :" + cargaHoraria + " horas";
	}

}
