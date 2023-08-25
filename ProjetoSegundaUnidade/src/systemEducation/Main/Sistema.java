package systemEducation.Main;
import systemEducation.Class.Professor;
import systemEducation.Class.Pessoa;
import systemEducation.Class.Direcao;
import systemEducation.Class.Aluno;

public class Sistema {
	public static void main(String[] args) {
		Pessoa p1 = new Pessoa(1,"Luan", "791.156.055-45",30,8,2005);
		Aluno a1 = new Aluno("2º Semestre","1515","Informatica",4,"João","222.222.222-22",30,8,2005);
		Professor prof1 = new Professor("Doutorado",60,2120.50,15,"janielcio","222.222.222-22",30,8,2005);
		Direcao d1 = new Direcao("Diretor Geral",222222,100,10,151,"Paulo","222.222.222-22",30,8,2005);
		
		
		prof1.valorPorHora();
		
		System.out.println();
		System.out.println();	
		System.out.println();
		System.out.println();	
		System.out.println();
	}
}
