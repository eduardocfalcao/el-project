<?php

namespace Model;

/**
 * @Entity @Table(name="Usuario")
 */
class Usuario {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string", length=1000) **/
    private $nome;

    /** @Column(type="string", length=100) **/
    private $login;

    /** @Column(type="string", length=150) **/
    private $senha;

    /** @Column(type="string", length=150) **/
    private $email;

    /** @Column(type="datetime") **/
    private $dataNascimento;

    /** @Column(type="integer") **/
    private $sexo;

    /** @Column(type="string", length=150) **/
    private $cidade;

    /** @Column(type="string", length=4) **/
    private $uf;

    /** @Column(type="string", length=150) **/
    private $pais;

    /** @Column(type="integer") **/
    private $perfil;

    /**
     * @OneToOne(targetEntity="Instituicao")
     * @JoinColumn(name="instituicao_id", referencedColumnName="id")
     */
    private $instituicao;

    public function getId() { return $this->id; }

    public function getNome() {	return $this->nome; }
    public function setNome($valor){ $this->nome = $valor; }

    public function getLogin() {return $this->login; }
    public function setLogin($valor){ $this->login = $valor; }

    public function getSenha() {return $this->senha; }
    public function setSenha($valor){ $this->senha = Usuario::Encrypt($valor); }

    public function getEmail() {return $this->email; }
    public function setEmail($valor){ $this->email = $valor; }

    public function getDataNascimento() {return $this->dataNascimento; }
    public function setDataNascimento($valor){ $this->dataNascimento = $valor; }

    public function getSexo() {return $this->sexo; }
    public function setSexo($valor){ $this->sexo = $valor; }

    public function getCidade() {return $this->cidade; }
    public function setCidade($valor){ $this->cidade = $valor; }

    public function getUf() {return $this->uf; }
    public function setUf($valor){ $this->uf = $valor; }

    public function getPais() {return $this->pais; }
    public function setPais($valor){ $this->pais = $valor; }

    public function getPerfil() {return $this->perfil; }
    public function setPerfil($valor){ $this->perfil = $valor; }

    public function getInstituicao() { return $this->instituicao; }
    public function setInstituicao($valor){ $this->instituicao = $valor; }

    public function IsAdmin()
    {
        return $this->perfil == 2;
    }

    /* Functions */
    public static function Encrypt($value)
    {
        return sha1($value);
    }

    public function getSextoString()
    {
        return $this->sexo == 1 ? "Masculino" : "Feminino";
    }

    public function getPerfilString()
    {
        $perfis = Usuario::perfis();
        return $perfis[$this->perfil];
    }

    public function Validar()
    {
        return true;
    }

    static function perfisString()
    {
        return array(1 => "Usu&aacute;io", 2 => "Administrator" );
    }
} 