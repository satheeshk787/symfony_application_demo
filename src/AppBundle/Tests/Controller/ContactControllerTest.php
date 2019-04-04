<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Entity\Contact;

class ContactControllerTest extends WebTestCase
{




   //  public function testShow() { 
   //    $contact = new Contact(); 
   //    $assign = $contact->show('sat'); 
   //    $check = "sat , Contact name is tested!"; 
   //    $this->assertEquals($check, $assign); 
   // } 

       

   //  public function testContactInsert() 
   //  { 
   //    $contact = new Contact(); 
   //    $assign = $stud->show(‘stud1’); 
   //    $check = “stud1 , Student name is tested!”; 
   //    $this->assertEquals($check, $assign); 
   // } 


   //  public function save()
   //  {
   //       $entityManager = $this->getDoctrine()->getManager();

   //       $contact = new Contact();
   //       $contact->setName('Name1');
   //       $contact->setAddress('Address1');
   //       $contact->setPhone('8899998888');

   //       $entityManager->persist($contact);
   //       $entityManager->flush();

   //       return new Response("Saved");
   //  }




    
    // public function testCompleteScenario()
    // {
    //     // Create a new client to browse the application
    //     $client = static::createClient();

    //     // Create a new entry in the database
    //     $crawler = $client->request('GET', '/contact/');
    //     $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /contact/");
    //     $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

    //     // Fill in the form and submit it
    //     $form = $crawler->selectButton('Create')->form(array(
    //         'appbundle_contact[field_name]'  => 'Test',
    //         // ... other fields to fill
    //     ));

    //     $client->submit($form);
    //     $crawler = $client->followRedirect();

    //     // Check data in the show view
    //     $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

    //     // Edit the entity
    //     $crawler = $client->click($crawler->selectLink('Edit')->link());

    //     $form = $crawler->selectButton('Update')->form(array(
    //         'appbundle_contact[field_name]'  => 'Foo',
    //         // ... other fields to fill
    //     ));

    //     $client->submit($form);
    //     $crawler = $client->followRedirect();

    //     // Check the element contains an attribute with value equals "Foo"
    //     $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

    //     // Delete the entity
    //     $client->submit($crawler->selectButton('Delete')->form());
    //     $crawler = $client->followRedirect();

    //     // Check the entity has been delete on the list
    //     $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    // }

    
}
