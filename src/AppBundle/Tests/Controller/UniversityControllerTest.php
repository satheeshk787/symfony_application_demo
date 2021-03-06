<?php
namespace AppBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Entity\University;
class UniversityControllerTest extends WebTestCase
{



    public function testShow() 
    { 
      $university = new University(); 
      $assign = $university->show('Mg University'); 
      $check = "Mg University , university name is tested!"; 
      $this->assertEquals($check, $assign); 
    } 



    // public function testInsertData()
    // {

    //      $status = 1;

    //      $entityManager = $this->getDoctrine()->getManager();

    //      $university = new University();
    //      $university->setName('Name1');

    //      $entityManager->persist($university);
    //      $entityManager->flush();

    //      $this->assertEquals($status, 1); 
    // }


    
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/university/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /university/");
        $crawler = $client->click($crawler->selectLink('Create a new university')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'appbundle_university[name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'appbundle_university[name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    
}
?>