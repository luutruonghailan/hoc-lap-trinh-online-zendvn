package chap01.basic;

public class p10_exe {
	
	// 007 Shap 7
	public static void main(String[] args) {
		/*						
		 * HEIGHT	= 5				(Chiều cao của hình thoi - Phải là số lẻ)
		   MIDDLE	= (HEIGHT+1)/2	(Dòng ở giữa hình thoi)
		    
		  						line	= 	space +	character
			     *				1			2		1
			    ***				2			1		3			space		= Math.abs(MIDDLE - line)
			   *****			3			0		5			character	= HEIGHT - 2*space
			    ***				4			1		3						= HEIGHT - 2*Math.abs(MIDDLE - line)
			     *				5			2		1
		 */

		String space		= "";
		String character	= "";
		String result		= "";	
		
		final int HEIGHT	= 12;	// Phải là số lẻ
		int middle			= (HEIGHT+1)/2;
		
		int line = 1;
		while(line <= HEIGHT){
			space		= "";
			character	= "";
			
			for(int s = 1; s <= Math.abs(middle-line); s++) space += "  ";
			for(int c = 1; c <= HEIGHT - 2*Math.abs(middle - line); c++) character += "* ";
			
			result += space + character + "\n";
			line++;
		}
		
		System.out.println(result);
	}
		
	// 006 Shap 6
	public static void main006(String[] args) {
		/*
			* * * * * * * * 
			* *         * *  
			*   *     *   *  
			*     * *     *  
			*     * *     *  
			*   *     *   *  
			* *         * *  
			* * * * * * * * 
		 */

		final int SIZE	= 8;
		
		for(int i = 1; i <= SIZE; i++){
			for(int j = 1; j <= SIZE; j++){
				 if (i == 1 || i == SIZE || j== SIZE + 1 - i || j== i || j == 1 || j == SIZE) {
					 System.out.print("* ");
				 }else{
					 System.out.print("  ");
				 }
			}
			System.out.println();
		}
	}
		
	// 005 Shap 5
	public static void main005(String[] args) {
		/*
			        1
			      2 1
			    3 2 1
			  4 3 2 1
			5 4 3 2 1
		 */

		final int SIZE	= 8;
		
		for(int i = 1; i <= SIZE; i++){
			for(int j = 1; j <= SIZE; j++){
				if (SIZE - j < i) {
                    System.out.print(SIZE - j + 1 + " ");
                } else {
                    System.out.print("  ");
                }
			}
			System.out.println();
		}
		
	}
		
	// 004 Shap 4
	public static void main004(String[] args) {
		/*
			1 2 3 4 5
		      1 2 3 4
		        1 2 3
		          1 2
		            1
		 */

		final int SIZE	= 8;
		
		for(int i = 1; i <= SIZE; i++){
			for(int j = 1; j <= SIZE; j++){
				if (j >= i) {
                    System.out.print(j - i + 1 + " ");
                } else {
                    System.out.print("  ");
                }
			}
			System.out.println();
		}
	}
		
	// 003 Shap 3
	public static void main003(String[] args) {
		/*
			* * * * * * * * 
			  *         *   
			    *     *     
			      * *       
			      * *       
			    *     *     
			  *         *   
			* * * * * * * * 
		 */

		final int SIZE	= 8;
		
		for(int i = 1; i <= SIZE; i++){
			for(int j = 1; j <= SIZE; j++){
				 if (i == 1 || i == SIZE || j== SIZE + 1 - i || j== i) {
					 System.out.print("* ");
				 }else{
					 System.out.print("  ");
				 }
			}
			System.out.println();
		}
	}
		
	// 002 Shap 2
	public static void main002(String[] args) {
		/*
		 	* * * * *
		 	      *
		 	    *
		 	  *
		 	* * * * *
		 */

		final int SIZE	= 5;
		
		for(int i = 1; i <= SIZE; i++){
			for(int j = 1; j <= SIZE; j++){
				 if (i == 1 || i == SIZE || j== SIZE + 1 - i ) {
					 System.out.print("* ");
				 }else{
					 System.out.print("  ");
				 }
			}
			System.out.println();
		}
	}
		
	// 001 Shap 1
	public static void main001(String[] args) {
		/*
		 	* * * * *
		 	  *
		 	    *
		 	      *
		 	* * * * *
		 */

		final int SIZE	= 5;
		
		for(int i = 1; i <= SIZE; i++){
			for(int j = 1; j <= SIZE; j++){
				 if (i == 1 || i == SIZE || j==i) {
					 System.out.print("* ");
				 }else{
					 System.out.print("  ");
				 }
			}
			System.out.println();
		}
	}
}