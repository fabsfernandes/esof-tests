
class MinhasStringsTest {

	public void testEhPalindromoQueDahNegativo(){

		// contexto
		MinhasStrings ms = new MinhasStrings();

		// o que vai ser testado 
		String str1 = "escola"
		Boolean resultado = ms.ehPalindromo(str1);

		// o resultado esperado
		// assertion
		Boolean esperado = False;

		assertEquals(esperado, resultado);
	}



	public void testEhPalindromo(){

		// contexto
		MinhasStrings ms = new MinhasStrings();

		// o que vai ser testado 
		String str1 = "arara"
		Boolean resultado = ms.ehPalindromo(str1);

		// o resultado esperado
		// assertion
		Boolean esperado = True;

		assertEquals(esperado, resultado);
	}














	public void testConcatena(){

		// contexto
		MinhasStrings mstrings = new MinhasStrings();		

		// o que vai ser testado
		String str1 = "Avenida ";
		String str2 = "Brasil";
		String resultado = mstrings.concatena(str1, str2);

		// o resultado esperado (assertiva)
		String esperado = "Avenida Brasil";

		assertEquals(esperado, resultado);
	}










	
}