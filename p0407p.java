/*
在陣列中插入一個新值，例如在a陣列索引值3處插入33
*/
public class p0407p{
	public static void main(String[] args){
		int a[] = {1, 2, 3, 4, 5, 6, 7};;
		int newdata = 33;
		int insert_pos = 3;
		
		System.out.println("原陣列");
		prArray(a);
		
		//陣列插入新值
		int index = a.length-1;
		while(index > insert_pos){
			a[index] = a[index-1];
			index--;
		}
		a[index] = newdata;
		
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