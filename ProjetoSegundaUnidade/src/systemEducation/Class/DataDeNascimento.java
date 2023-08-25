package systemEducation.Class;

import java.util.Date;
import java.util.Calendar;

public class DataDeNascimento {
	private int dia;
	private int mes;
	private int ano;

	public DataDeNascimento() {
		Date dataAtual = new Date();
		Calendar calendario = Calendar.getInstance();
		calendario.setTime(dataAtual);
		this.ano = calendario.get(Calendar.YEAR);
	    this.mes = calendario.get(Calendar.MONTH) + 1; // Os meses são indexados a partir de 0
	    this.dia = calendario.get(Calendar.DAY_OF_MONTH);
	}
	
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
	
	//Criar metodo que retorana idade

	@Override
	public String toString() {
		return "Data: " + dia + "/" + mes + "/" + ano;
	}
}
