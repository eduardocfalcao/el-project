<?php

namespace Model;

/**
 * @Entity @Table(name="Responsavel")
 */
class Responsavel {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=1000) **/
    private $nome;

    /** @Column(type="string", length=1000) **/
    private $cargo;

    /** @Column(type="string", length=100) **/
    private $cpf;

    /** @Column(type="string", length=150) **/
    private $rg;

    /** @Column(type="string", length=150) **/
    private $outrasInformacoes;

    /**
     * @OneToOne(targetEntity="Instituicao")
     * @JoinColumn(name="instituicao_id", referencedColumnName="id")
     */
    private $instituicao;

    public function getId() { return $this->id; }

    public function getNome() {	return $this->nome; }
    public function setNome($valor){ $this->nome = $valor; }

    public function getCargo() { return $this->cargo; }
    public function setCargo($valor){ $this->cargo = $valor; }

    public function getCpf() { return $this->cpf; }
    public function setCpf($valor){ $this->cpf = $valor; }

    public function getRg() { return $this->rg; }
    public function setRg($valor){ $this->rg = $valor; }

    public function getOutrasInformacoes() { return $this->outrasInformacoes; }
    public function setOutrasInformacoes($valor){ $this->outrasInformacoes = $valor; }

    public function getInstituicao() { return $this->instituicao; }
    public function setInstituicao($valor){ $this->instituicao = $valor; }
} 