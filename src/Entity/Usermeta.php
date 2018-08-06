<?php
    namespace Src\Entity;

    use Src\Entity;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="user_email", columns={"email"})}))
     */


    class Usermeta
    {
        /**
         * @ORM\Id
         * @ORM\Column(name="id", type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="string", length=64)
         */
        protected $name;
        /**
         * @ORM\Column(type="integer", length=100)
        */
        protected $phone;
        /**
         * @ORM\Column(type="string", length=100)
         */
        protected $email;
        /**
         * @ORM\Column(type="string", length=255)
         */
        protected $address;
    }
