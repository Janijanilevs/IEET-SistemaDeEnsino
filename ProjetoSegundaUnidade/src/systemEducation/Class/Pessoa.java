package systemEducation.Class;

public class Pessoa {
	private int id;
	private String nome;
	private String cpf;
	private String genero;
	private Data data;
	
	public Pessoa(){}
	
	public Pessoa(int id, String nome,String cpf,String genero, int dia,int mes, int ano){
		this.id = id;
		this.nome = nome;
		this.cpf = cpf;
		this.genero = genero;
		if(dia != 0 && mes != 0 && ano != 0){
			this.data = new Data(dia,mes,ano); 
		}
		else{
			this.data = new Data(0); 
		}
		this.adicionaTitulo();
	}
	public String getGenero() {
		return genero;
	}

	public void setGenero(String genero) {
		this.genero = genero;
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
	public Data getData() {
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
	public void setData(Data data) {
		this.data = data;
	}
	
	// Esse eu não consegui testa pq depende do outro
	// Ps: Ele n é paia só diferente
	
	public void adicionaTitulo(){
		if(data.retornaIdadeInt() > 30) {
			this.nome = (getGenero() == "M") ? "Sr." + this.nome : "Sra." + this.nome;
		}else {
			this.nome = "Jovem " + this.nome;
		}
	}
	
	public String retornaIdade() {
		return "A idade dessa pessoa é "+ data.retornaIdadeInt();
	}
	
	
	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return " ID: " + id + "\n NOME:" + nome + "\n " + data.toString();
	}
}
