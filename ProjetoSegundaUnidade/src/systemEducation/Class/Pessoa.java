package systemEducation.Class;

public class Pessoa {
	private int id;
	private String nome;
	private String cpf;
	private DataDeNascimento data;
	
	public Pessoa(){}
	
	public Pessoa(int id, String nome,String cpf,int dia,int mes, int ano){
		this.id = id;
		this.nome = nome;
		this.cpf = cpf;
		if(dia != 0 && mes != 0 && ano != 0){
			this.data = new DataDeNascimento(dia,mes,ano); 
		}else if(dia == 0 || mes == 0){
			this.data = new DataDeNascimento(0); 
		}else if(ano == 0){
			this.data = new DataDeNascimento(); 
		}
	}
	public int getId() {
		return this.id;
	}
	public String getNome() {
		return this.nome;
	}
	public String getCpf() {
		return this.cpf;
	}
	public DataDeNascimento getData() {
		return this.data;
	}
	
	public void setId(int id) {
		this.id = id;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public void setCpf(String cpf) {
		this.cpf = cpf;
	}
	public void setData(DataDeNascimento data) {
		this.data = data;
	}
	
	

	
	@Override
	public String toString() {
		return " ID: " + id + "\n NOME:" + nome + "\n " + data.toString();
	}
}
