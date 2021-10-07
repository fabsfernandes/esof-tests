import org.junit.Test;
import static org.junit.Assert.assertEquals;

public class OperacaoMatematicaTeste {

	@Test
	public void testMax() {

		OperacaoMatematica opmat = new OperacaoMatematica();
		resultado = opmat.max(3, 9);
		assertEquals(9, resultado);
	}

	public void testMultiplica() {
		OperacaoMatematica opmat = new OperacaoMatematica();
		BigInteger a = new BigInteger(4);
		BigInteger b = new BigInteger(5);
		resultado = opmat.multiplica(a, b);

		BigInteger esperado = new BigInteger(20);
		assertEquals(esperado, resultado);
	}
}