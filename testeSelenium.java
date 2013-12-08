/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

import com.thoughtworks.selenium.*;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;
import static org.junit.Assert.*;
import java.util.regex.Pattern;
import org.openqa.selenium.server.SeleniumServer;

public class testeSelenium {
	private Selenium selenium;
        SeleniumServer servidor;

	@Before
	public void setUp() throws Exception {
		selenium = new DefaultSelenium("localhost", 4444, "*chrome", "http://localhost/imc/");
		selenium.start();
	}

	@Test
	public void testTesteSelenium() throws Exception {
		selenium.open("/imc-teste/");
                Thread.sleep(3000);
		selenium.type("id=altura", "1,79");
		selenium.type("id=peso", "86");
		selenium.click("id=calcular");
		selenium.waitForPageToLoad("30000");
        assertEquals(selenium.isTextPresent("Sucesso!"), true);
	}

	@After
	public void tearDown() throws Exception {
		selenium.stop();
	}
}
