//°}¦C«þ¨©

public class p0409p{
	public static void main(String[] args){
		int a[];
		int b[];
		int array_size = 10;
		
		a = new int[array_size];
		for(int i=0; i<a.length; i++)
			a[i] = i+1;

		System.out.println("a°}¦C");
		prArray(a);
		
		b = new int[a.length];
		
		//°}¦C«þ¨©
		for (int i=0; i<a.length; i++)
			b[i] = a[i];
		
		System.out.println("b°}¦C");
		prArray(b);
		
	}
	
	static void prArray(int a[]){
		System.out.println("°}¦C¿é¥X¡G");
		for (int i=0; i<a.length; i++)
			System.out.print(a[i]+" , ");
		System.out.println();
	}
}