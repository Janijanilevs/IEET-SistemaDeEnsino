package systemEducation.Main;
import systemEducation.Class.Professor;
import systemEducation.Class.Pessoa;

public class Sistema {
	public static void main(String[] args) {
		Pessoa p1 = new Pessoa(1,"Luan","075.132.735-29",30,8,2005);
		Professor prof1 = new Professor("Doutorado",60);
		System.out.println("teste da classe pessoa\n" + p1.toString());
		System.out.println("------------------------------------------------------------------------------------------------------------------");	
		System.out.println("teste da classse Professor\n" + prof1.toString());
	}
}
