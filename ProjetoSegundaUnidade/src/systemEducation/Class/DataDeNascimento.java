package systemEducation.Class;


import java.time.LocalDate;
import java.time.Period;

public class DataDeNascimento {
	private int dia;
	private int mes;
	private int ano;
	
	public DataDeNascimento(int num) {
		this.dia = num;
		this.mes = num;
		this.ano = num;
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
	
	// Tem algum problema neste metodo. No meu não compilou 
	
	public int retornaIdadeInt() {
		LocalDate hoje = LocalDate.now();
		LocalDate dataNascimento = LocalDate.of(ano, mes, ano);
		Period periodo = Period.between(dataNascimento, hoje);
		int idade = periodo.getYears();
		
		return idade;
	}
	
	//Criar metodo que retorana idade

	
	//Formatar toString -> esse n precisa tanto
	@Override
	public String toString() {
		return "Data: " + dia + "/" + mes + "/" + ano;
	}
}
