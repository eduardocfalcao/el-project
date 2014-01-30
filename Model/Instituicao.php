<?php

namespace Model;

/**
 * @Entity @Table(name="Instituicao")
 */
class Instituicao {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=1000) **/
    private $nome;

    /** @Column(type="string", length=150) **/
    private $email;

    /** @Column(type="string", length=30) */
    private $cnpj;

    /** @Column(type="string", length=100) **/
    private $telefone;

    /** @Column(type="string", length=100) **/
    private $telefoneAlternativo;

    /** @Column(type="string", length=255) **/
    private $site;

    /** @Column(type="string", length=255) **/
    private $facebook;

    /** @Column(type="string", length=150) **/
    private $cidade;

    /** @Column(type="string", length=4) **/
    private $uf;

    /** @Column(type="string", length=1000) **/
    private $endereco;

    /** @Column(type="string", length=150) **/
    private $pais;

    /** @Column(type="string", length=20) **/
    private $cep;

    /** @Column(type="string", length=1000) **/
    private $outrasInformacoes;

    /**
     * @OneToOne(targetEntity="Responsavel")
     * @JoinColumn(name="responsavel_id", referencedColumnName="id")
     */
    private $responsavel;

    public function setNome($value){ $this->nome = $value; }
    public function getNome(){ return $this->nome; }

    public function setEmail($value) { $this->email = $value; }
    public function getEmail() { return $this->email; }

    public function setCnpj($value) { $this->cnpj = $value; }
    public function getCnpj() { return $this->cnpj; }

    public function setTelefone($value) { $this->telefone = $value; }
    public function getTelefone() { return $this->telefone; }

    public function setTelefoneAlternativo($value) { $this->telefoneAlternativo = $value;  }
    public function getTelefoneAlternativo() { return $this->telefoneAlternativo; }

    public function setSite($value) { $this->site = $value; }
    public function getSite() { return $this->site; }

    public function setFacebook($value) { $this->facebook = $value; }
    public function getFacebook() { return $this->facebook; }

    public function setCidade($value) { $this->cidade = $value; }
    public function getCidade() { return $this->cidade; }

    public function setUf($value) { $this->uf = $value; }
    public function getUf() { return $this->uf; }

    public function setEndereco($value) { $this->endereco = $value; }
    public function getEndereco() { return $this->endereco; }

    public function setPais($value) { $this->pais = $value; }
    public function getPais() { return $this->pais; }

    public function setCep($value) { $this->cep = $value; }
    public function getCep() { return $this->cep; }

    public function setOutrasInformacoes($value) { $this->outrasInformacoes = $value; }
    public function getOutrasInformacoes() { return $this->outrasInformacoes; }

    public function setUsuario($value) { $this->usuario = $value; }
    public function getUsuario() { return $this->usuario; }

    public function setResponsavel($value) { $this->responsavel = $value; }
    public function getResponsavel() { return $this->responsavel; }
} 