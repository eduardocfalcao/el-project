<?php

namespace Model;

/**
* @Entity @Table(name="Projeto")
*/
class Projeto {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=1000) **/
    private $nome;
} 