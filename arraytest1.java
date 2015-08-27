public class arraytest1{
	public static void main(String[] args){
		int a[];
		a = new int[7];
		int b[] = new int[7];
		int c[] = {1, 2, 3, 4, 5, 6, 7};
		
		a[0] = 99;
		a[1] = 88;
		a[2] = 77;
		a[3] = 66; //a[4] = null
		a[5] = 44;
		a[6] = 33;
		
		System.out.println("length of array a = "+a.length);
		
		for (int i=0; i<a.length; i++){
			System.out.print(a[i]+" ");
		}
		System.out.println();
	}
}