//�b�}�C���R���@�ӭȡA�Ҧp�ba�}�C���R��a[3]��

public class p0408p{
	public static void main(String[] args){
		int a[] = new int[10];
		int delete_pos = 3;
		
		//�]�wa�}�C���e {1,2,3,4, 5,6,7,0,0,0}
		for (int i=0; i<7; i++)
			a[i] = i+1;
		
		System.out.println("��}�C");
		prArray(a);
		
		//�}�C�R������
		int index = delete_pos; //�R��a[3]
		while(index < a.length-1){
			a[index] = a[index+1];
			index++;
		}
		
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