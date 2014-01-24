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
                    $this->SetViewMessage("A senha atual est&aacute; incorreta.","erro");
                }
            }
            else
            {
                $this->SetViewMessage("Os campos da nova senha n&aacute;o conferem.","erro");
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