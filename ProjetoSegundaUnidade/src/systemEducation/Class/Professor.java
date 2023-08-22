package systemEducation.Class;

public class Professor extends Pessoa {
	private String formacao;
	private int cargaHoraria;

	public Professor(String formacao, int cargaHoraria, int id, String nome, String cpf, int dia, int mes, int ano) {
		super(id, nome, cpf, dia, mes, ano);
		this.formacao = formacao;
		this.cargaHoraria = cargaHoraria;
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

	@Override
	public String toString() {
		return "O professor "+ this.getNome()+ " possui formação de :"+ formacao+ ", e carga horária na instituição de :" + cargaHoraria + " horas";
	}

}
