<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.mobly.com.br/");
  }

  public function testMyTestCase()
  {
    $this->open("/");
    $this->click("//div[@id='nav-subcategories']/ul/li[2]/div/div/div/div/a/span");
    $this->waitForPageToLoad("0000");
    $this->verifyTextPresent("Mais vendidos");
    try {
        $this->assertTrue($this->isElementPresent("id=recommengine_recommendations"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->click("//div[@id='nav-subcategories']/ul/li/div/div/div[2]/div/a/span");
    $this->waitForPageToLoad("30000");
    $this->verifyTextPresent("Mais vendidos");
    try {
        $this->assertTrue($this->isElementPresent("id=recommengine_recommendations"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->open("http://www.mobly.com.br/poltrona-reclinavel-dream-couro-sintetico-preta-american-comfort-5669.html");
    $this->verifyTextPresent("Recomendações para você");
    try {
        $this->assertTrue($this->isElementPresent("id=recommengine_recommendations"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
    $this->verifyTextPresent("Últimos Produtos Vistos");
    try {
        $this->assertTrue($this->isElementPresent("id=recommengine_lastproductsviewed"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>