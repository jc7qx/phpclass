/*
�b�}�C�����J�@�ӷs�ȡA�Ҧp�ba�}�C���ޭ�3�B���J33
*/
public class p0407p{
	public static void main(String[] args){
		int a[] = {1, 2, 3, 4, 5, 6, 7};;
		int newdata = 33;
		int insert_pos = 3;
		
		System.out.println("��}�C");
		prArray(a);
		
		//�}�C���J�s��
		int index = a.length-1;
		while(index > insert_pos){
			a[index] = a[index-1];
			index--;
		}
		a[index] = newdata;
		
		System.out.println("�s�}�C");
		prArray(a);
		
	}
	
	static void prArray(int a[]){
		System.out.println("�}�C��X�G");
		for (int i=0; i<a.length; i++)
			System.out.print(a[i]+" , ");
		System.out.println();
	}
}