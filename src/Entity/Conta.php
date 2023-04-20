<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'Conta')]
class Conta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $cod;

    #[ORM\Column(type: 'string')]
    private string $nome;

    #[ORM\Column(type: 'integer')]
    private int $status;
}