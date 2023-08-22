package systemEducation;

public class DataDeNascimento {
	private int dia;
	private int mes;
	private int ano;
	
	DataDeNascimento(){
		this.dia = 0;
		this.mes = 0;
		this.ano = 0;
	}
	public DataDeNascimento(int dia, int mes, int ano) {
		this.dia = dia;
		this.mes = mes;
		this.ano = ano;
	}
	
	public int getDia() {
		return this.dia;
	}
	public int getMes() {
		return this.mes;
	}
	public int getAno() {
		return this.ano;
	}
	public void setDia(int dia) {
		this.dia = dia;
	}
	public void setMes(int mes) {
		this.mes = mes;
	}
	public void setAno(int ano) {
		this.ano = ano;
	}
	
	@Override
	public String toString() {
		return "Data: " + dia + "/" + mes + "/" + ano;
	}
}
