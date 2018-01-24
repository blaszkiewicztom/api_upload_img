<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24.01.18
 * Time: 00:22
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="uploaded_image")
 */
class UploadedImage
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $fileName;
    /**
     * @ORM\Column(type="string")
     */
    private $originalName;
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * @param mixed $originalName
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }



}