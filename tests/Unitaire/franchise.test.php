<?php

namespace App\Tests\Unit;

use App\Entity\FranchiseMain;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PartnerTest extends KernelTestCase
{
    public function FranchiseNameInvalid(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $franchise = new FranchiseMain();
        $franchise->setContrat('')
                ->setIsActive(true);

        $errors = $container->get('validator')->validate($franchise);

        $this->assertCount(0, $errors);
       
    }

    public function FranchiseInvalidNameContrat(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $franchise = new FranchiseMain();
        $franchise->setContrat(false)
                  ->setIsActive(true);

        $errors = $container->get('validator')->validate($franchise);

        $this->assertCount(0, $errors);
       
    }


    public function FranchiseBooleanInvalid(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $franchise = new FranchiseMain();
        $franchise->setContrat('1er contrat test')
                  ->setIsActive('message in string');

        $errors = $container->get('validator')->validate($franchise);

        $this->assertCount(0, $errors);
       
    }
}