<?php

namespace App\Controller;

/* Ici on récupère nos fonctions et entités pour pouvoir les manipuler dans le controller */
use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;

/* Création de notre classe */
class ContactController extends AbstractController
{
    /* Ici on place notre route qui va nous permettre d'aller à un tempalte twig indiqué */
    #[Route('/contact', name: 'app_contact')]
    /* On va créer notre fonction pour pouvoir l'exécuter après dans notre route (une fois accéder) */
    public function ContactFunction(Request $request, EntityManagerInterface $manager, MailerInterface $mailer): Response
    {
        /* On recupère tous les attribus de notre entité Contact dans notre variable contact */
        $contact = new Contact();
        /* Ici on va chercher notre formulaire (donc ici notre ContactType) pour pouvoir récupérer les éléments que le user va rentrer */
        $form = $this->createForm(ContactType::class, $contact);

        /* Ici on va récupèrer les élémens que le user a rentré dans nos input twig et html */
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            /* Condition : que le user a validé ses informations dans les input on récupère les informations*/
            $contact =$form->getData();
            
            /* Après avoir récupérer les informations on les persist puis flush pour les placer dans notre base de données SQL */
            $manager->persist($contact);
            $manager->flush();

            //Email qui est envoyé une fois les informations rentrer dans notre BDD
            $email = (new TemplatedEmail())
            ->from($contact->getEmail())
            ->to('admin@athletice.com')
            ->subject($contact->getSubject())
            ->htmlTemplate('email/contact.html.twig')

            // pass variables (name => value) to the template
            ->context([
                'contact' => $contact
            ]);
        
        $mailer->send($email);
            // Dès que l'email est envoyé on est retourné vers une page de succès d'envoie si tout c'est bien déroulé
            return $this->render('contact/succes_envoie.html.twig');
        }

        /* Notre createView est important dans le render car il permet d'afficher ici les attribus de notre formulaire ContactType
        dans notre DOM html */
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
