<?php

namespace Controller;

use Framework\LoginService;

class UsuarioController extends PageController {

    public function __construct($xajax, $smarty)
    {
        parent::__construct($xajax, $smarty);
    }

    public function Cadastro()
    {
        if($this->isPostBack())
        {
            $usuario = new \Model\Usuario();

            $usuario->setNome($_POST["nome"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setDataNascimento(new \DateTime($_POST["dataNascimento"]));
            $usuario->setSexo($_POST["sexo"]);
            $usuario->setCidade($_POST["cidade"]);
            $usuario->setUf($_POST["uf"]);
            $usuario->setPais($_POST["pais"]);
            $usuario->setLogin($_POST["login"]);
            $usuario->setSenha($_POST["senha"]);
            $usuario->setPerfil(1);

            $this->em->persist($usuario);
            $this->em->flush();

            echo "Salvou o usuário";
            //TODO: colocar mensagem bonita
        }
    }

    public function MinhaConta()
    {

    }

    public function Instituicao()
    {
        $usuario = $this->getLoggedUser();
        $instituicao = $usuario->getInstituicao();

        if($instituicao == null)
        {
            $instituicao = new \Model\Instituicao();
        }

        if($this->isPostBack())
        {
            $instituicao->setNome($_POST["nomeInstituicao"]);
            $instituicao->setEmail($_POST["email"]);
            $instituicao->setCnpj($_POST["cnpj"]);
            $instituicao->setTelefone($_POST["telefone"]);
            $instituicao->setTelefoneAlternativo($_POST["telefoneOpcional"]);
            $instituicao->setSite($_POST["site"]);
            $instituicao->setFacebook($_POST["facebook"]);
            $instituicao->setCidade($_POST["cidade"]);
            $instituicao->setUf($_POST["uf"]);
            $instituicao->setPais($_POST["pais"]);
            $instituicao->setCep($_POST["cep"]);
            $instituicao->setEndereco($_POST["endereco"]);
            $instituicao->setOutrasInformacoes($_POST["outrasInformacoes"]);

            $usuario->setInstituicao($instituicao);

            $this->em->persist($usuario);
            $this->em->persist($instituicao);
            $this->em->flush();

            $this->SetViewMessage("Os dados foram salvos.", "sucesso");
        }

        $this->set("instituicao",$instituicao);
    }

    public function Responsavel()
    {
        $usuario = $this->getLoggedUser();
        $instituicao = $usuario->getInstituicao();

        if($instituicao != null)
        {
            $responsavel = $instituicao->getResponsavel();
            if($responsavel == null) $responsavel = new \Model\Responsavel();

            if($this->isPostBack())
            {
                $responsavel->setNome($_POST["nome"]);
                $responsavel->setCargo($_POST["cargo"]);
                $responsavel->setCpf($_POST["cpf"]);
                $responsavel->setRf($_POST["rg"]);
                $responsavel->setOutrasInformacoes($_POST["outrasInformacoes"]);

                $responsavel->setInstituicao($instituicao);

                $this->em->persist($responsavel);
                $this->em->flush();

                $this->SetViewMessage("Os dados foram salvos.", "sucesso");
            }
            $this->set("responsavel", $responsavel);
        }
        else
        {
            //redirecionar para uma tela dizendo que o conteudo ainda nao esta liberado
        }
    }

    public function Projeto()
    {
        //carrega dados e poe na tela
        if($this->isPostBack())
        {

        }
    }

    public function AlterarDados()
    {
        $this->verificaUsuarioLogado();

        $userInfo = \Framework\LoginService::GetUserSessionInfo();
        $usuario = $this->em->find("\\Model\\Usuario",$userInfo["id"]);

        if($this->isPostBack())
        {
            $usuario->setNome($_POST["nome"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setDataNascimento(new \DateTime($_POST["dataNascimento"]));
            $usuario->setSexo($_POST["sexo"]);
            $usuario->setCidade($_POST["cidade"]);
            $usuario->setUf($_POST["uf"]);
            $usuario->setPais($_POST["pais"]);


            $this->em->persist($usuario);
            $this->em->flush();

            $this->SetViewMessage("Os dados foram alterados.", "sucesso");
        }
        $this->set("usuario",$usuario);
    }

    public function AlterarSenha()
    {
        $this->verificaUsuarioLogado();

        if($this->isPostBack())
        {
            $userInfo = \Framework\LoginService::GetUserSessionInfo();
            $usuario = $this->em->find("\\Model\\Usuario",$userInfo["id"]);
            if(\Model\Usuario::Encrypt($_POST["senhaAtual"]) == $usuario->getSenha())
            {
                if($_POST["novaSenha"] == $_POST["repetirSenha"])
                {
                    $usuario->setSenha(\Model\Usuario::Encrypt($_POST["novaSenha"]));
                    $this->em->persist($usuario);
                    $this->em->flush();

                    $this->SetViewMessage("A senha foi alterada.", "sucesso");
                }
                else
                {
                    $this->SetViewMessage("Os campos da nova senha n&atilde;o conferem.","erro");
                }
            }
            else
            {
                $this->SetViewMessage("A senha atual est&aacute; incorreta.","erro");
            }
        }

    }

    public function Login()
    {
        if(\Framework\LoginService::IsUserAuthenticate())
        {
            $this->redirect("Usuario/MinhaConta");
        }

        if($this->isPostBack())
        {
            $qb = $this->em->createQueryBuilder();
            $qb->select('u')
                ->from('\Model\Usuario', 'u')
                ->where('u.login = :login')
                ->andWhere('u.senha = :senha');

            $qb->setParameter('login', $_POST["login"]);
            $qb->setParameter('senha', \Model\Usuario::Encrypt($_POST["senha"]));

            $usuario = $qb->getQuery()->getOneOrNullResult();

            if($usuario != null)
            {
                LoginService::UserServiceLogOn($usuario->getId(), $usuario->getLogin(), $usuario->IsAdmin());
                $this->redirect("Usuario/MinhaConta");
            }
            else
            {
                echo "usuario nao encontrado.";
            }
        }
    }

    public function Logout()
    {
        if(\Framework\LoginService::IsUserAuthenticate())
        {
            \Framework\LoginService::UserServiceLogOut();
            $this->redirect("Home/Index");
        }
        $this->redirect("Home/Index");
    }

    private function verificaUsuarioLogado()
    {
        if(\Framework\LoginService::IsUserAuthenticate() == false)
        {
            $this->redirect("Usuario/Login");
        }
    }
} 