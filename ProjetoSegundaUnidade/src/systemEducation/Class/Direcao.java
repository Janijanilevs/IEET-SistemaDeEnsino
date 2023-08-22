package systemEducation.Class;

public class Direcao extends Pessoa {
	private String cargo;
	private float orcamento;
	private int numAlunos;
	private int numFuncionarios;
	private int numProfessores;
		
		public Direcao(String cargo, float orcamento,int id, String nome,String cpf,int dia,int mes, int ano){
			super(id, nome, cpf, dia, mes, ano);
			this.cargo = cargo;
			this.orcamento = orcamento;
		}

		@Override
		public String toString() {
			return "Direcao [cargo=" + cargo + ", orcamento=" + orcamento + ", numAlunos=" + numAlunos
					+ ", numFuncionarios=" + numFuncionarios + ", numProfessores=" + numProfessores + "]";
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
