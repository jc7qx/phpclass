//在陣列中刪除一個值，例如在a陣列中刪除a[3]值

public class p0408p{
	public static void main(String[] args){
		int a[] = new int[10];
		int delete_pos = 3;
		
		//設定a陣列內容 {1,2,3,4, 5,6,7,0,0,0}
		for (int i=0; i<7; i++)
			a[i] = i+1;
		
		System.out.println("原陣列");
		prArray(a);
		
		//陣列刪除元素
		int index = delete_pos; //刪除a[3]
		while(index < a.length-1){
			a[index] = a[index+1];
			index++;
		}
		
		System.out.println("新陣列");
		prArray(a);
		
	}
	
	static void prArray(int a[]){
		System.out.println("陣列輸出：");
		for (int i=0; i<a.length; i++)
			System.out.print(a[i]+" , ");
		System.out.println();
	}
}