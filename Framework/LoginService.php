<?php

namespace Framework;

class LoginService  {

	/**
	 * LoginService constructor
	 *
	 * @param 
	 */
	function LoginService()
	{

	}

    static function UserPrefix(){ return "UserService_"; }
	static function fields(){ return array("name" =>"nome", "id"=>"id", "logado"=> "logado", "admin"=> false ); }

    public static function IsUserAuthenticate()
    {
        $prefix = LoginService::UserPrefix();
        return LoginService::isAuthenticated($prefix);
    }

    private static function isAuthenticated($prefix)
    {
        if(!isset($_SESSION))
            session_start();
        $fields = LoginService::fields();
        $bool = isset($_SESSION[$prefix.$fields["logado"]]) && $_SESSION[$prefix.$fields["logado"]] == "true";
        return $bool;
    }

    public static function UserServiceLogOn($id,$name, $isAdmin)
    {
        LoginService::serviceLogOn(LoginService::UserPrefix(), $id, $name, $isAdmin);
    }

    private static function serviceLogOn($prefix, $id, $name, $isAdmin)
    {
        if(!isset($_SESSION))
            session_start();
        $fields = LoginService::fields();
        $_SESSION[$prefix.$fields["name"]] = $name;
        $_SESSION[$prefix.$fields["id"]] = $id;
        $_SESSION[$prefix.$fields["logado"]] = true;
        $_SESSION[$prefix.$fields["admin"]] = $isAdmin;
    }

    public static function GetUserSessionInfo()
    {
        return LoginService::getSessionInfo(LoginService::UserPrefix());
    }

	private static function getSessionInfo($prefix)
	{
		if(!isset($_SESSION))
			session_start();
			
		$fields = LoginService::fields();
		$user["nome"] = $_SESSION[$prefix.$fields["name"]];
        $user["id"] = $_SESSION[$prefix.$fields["id"]];
        $user["admin"] = $_SESSION[$prefix.$fields["admin"]];

		return $user;
	}

    public static function UserServiceLogOut()
    {
        LoginService::serviceLogOut(LoginService::UserPrefix());
    }

	private static function serviceLogOut($prefix)
	{
		if(!isset($_SESSION))
			session_start();
			
		$fields = LoginService::fields();
		unset($_SESSION[$prefix.$fields["name"]]);
		unset($_SESSION[$prefix.$fields["id"]]);
        unset($_SESSION[$prefix.$fields["admin"]]);
		$_SESSION[$prefix.$fields["logado"]] = false;
		unset($_SESSION[$prefix.$fields["logado"]]);
		if (count($_SESSION) == 0)
			session_destroy();
	}
}

?>