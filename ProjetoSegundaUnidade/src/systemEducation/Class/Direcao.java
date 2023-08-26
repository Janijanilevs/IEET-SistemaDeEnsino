package systemEducation.Class;

public class Direcao extends Pessoa {
	private String cargo;
	private double orcamento;
	private int numAlunos;
	private int numProfessores;
	private Professor[] professores;
		
	public Direcao(String cargo, double orcamento,int numAlunos,int id, String nome,String cpf, String genero, int dia,int mes, int ano, Professor[] prof){
		super(id, nome, cpf, genero, dia, mes, ano);
		this.cargo = cargo;
		this.orcamento = orcamento;
		this.numAlunos = numAlunos;
		this.professores = prof;
		this.numProfessores = prof.length;
	}

	public Professor[] getProfessores() {
		return professores;
	}

	public void setProfessores(Professor[] professores) {
		this.professores = professores;
	}

	public int getNumAlunos() {
		return numAlunos;
	}

	public void setNumAlunos(int numAlunos) {
		this.numAlunos = numAlunos;
	}

	public int getNumProfessores() {
		return numProfessores;
	}
	
	public void setNumProfessores(int numProfessores) {
		this.numProfessores = numProfessores;
	}

	public String getCargo() {
		return cargo;
	}
	
	public void setCargo(String cargo) {
		this.cargo = cargo;
	}
	
	public double getOrcamento() {
		return orcamento;
	}

	public void setOrcamento(float orcamento) {
		this.orcamento = orcamento;
	}
	
	
	//Criar um metodo que vai realizar uma analise de orçamento -> Esta funcionando corretamente
	
	public void orcamentoStatus() {
		double salarioTotal = 0;
		for(Professor professor: professores) {
			salarioTotal += professor.getSalario();
		}
		
		if(salarioTotal > this.orcamento * 0.45) {
			System.out.print( "O salario dos professores deve ser reavaliado imediatamente. A verba de 45% destinada a isso está sendo muito ultrapassada."+salarioTotal);
		}else{
			System.out.print( "O salario dos professores está condizente com o padrão de verba estabalecido de 45% do orçamento Total.");
		}
		
	}
	
	
	//Formatar toString -> deixem legivel
	@Override
	public String toString() {
		return "Direcao [cargo=" + cargo + ", orcamento=" + orcamento + ", numAlunos=" + numAlunos
				+ ", numProfessores=" + numProfessores + "]";
	}
}
