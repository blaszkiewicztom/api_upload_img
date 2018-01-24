<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24.01.18
 * Time: 00:47
 */

namespace AppBundle\Service;


use AppBundle\Entity\UploadedImage;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $em;
    private $container;

    public function __construct(EntityManager $em, ContainerInterface $container){

        $this->em = $em;
        $this->container = $container;

    }

    public function uploadImage(UploadedFile $image){

        $fileName = md5(uniqid()) . '.' . $image->guessExtension ();
        $originalName = $image->getClientOriginalName ();
        $image->move($this->container->getParameter( 'image_directory' ), $fileName);

        $image_entity = new UploadedImage();
        $image_entity->setFileName ($fileName);
        $image_entity->setOriginalName ($originalName);
        $image_entity->setCreatedAt(new \DateTime ());

        $this->em->persist($image_entity);
        $this->em->flush();

    }

}