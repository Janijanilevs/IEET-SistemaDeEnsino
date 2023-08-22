package systemEducation.Class;

public class Direcao extends Pessoa {
	private String cargo;
	private float orcamento;
	private int numAlunos;
	private int numFuncionarios;
	private int numProfessores;
		
		public Direcao(String cargo, float orcamento,int numAlunos,int numFuncionarios,int numProfessores,int id, String nome,String cpf,int dia,int mes, int ano){
			super(id, nome, cpf, dia, mes, ano);
			this.cargo = cargo;
			this.orcamento = orcamento;
			this.numAlunos = numAlunos;
			this.numFuncionarios = numFuncionarios;
			this.numProfessores = numProfessores;
			
		}
		@Override
		public String toString() {
			return " A instituição possui o orçamento de " + orcamento +", com o "+this.getNome() + " como " + cargo +", e possui o número total de alunos de: " + numAlunos
					+ ", número total de funcionários de: " + numFuncionarios + " e o número total de professores de: " + numProfessores;
		}

		public int getNumAlunos() {
			return numAlunos;
		}

		public void setNumAlunos(int numAlunos) {
			this.numAlunos = numAlunos;
		}

		public int getNumFuncionarios() {
			return numFuncionarios;
		}

		public void setNumFuncionarios(int numFuncionarios) {
			this.numFuncionarios = numFuncionarios;
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

		public float getOrcamento() {
			return orcamento;
		}

		public void setOrcamento(float orcamento) {
			this.orcamento = orcamento;
		}
		
}
