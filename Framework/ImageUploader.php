<?php
namespace Framework;
class ImageUploader{
	
	private $maxWidth;
	private $maxHeight;
	
	public function __construct(){
		$this->maxWidth = 1024;
		$this->maxHeight = 768;
	}
	
	public function setMaxWidth($valor){ $this->maxWidth = $valor; }
	public function getMaxWidth($valor){ return $this->maxWidth; }
	
	public function setMaxHeight($valor){ $this->maxHeight = $valor; }
	public function getMaxHeight($valor){ return $this->maxHeight; }
	
	public function uploadImagem($arquivo,$pasta, $makeThumb = true)
	{
		if (!empty($arquivo)) {
			$file 	  = $arquivo;
			$tempFile = $arquivo['tmp_name'];
			
			//Pega a extensao do arquivo
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i",$file["name"], $ext);
				
			// Gera um nome único para a imagem		
			$imagem_nome = md5(uniqid(time())) . "." . $ext[1];
			
			chmod("uploads/".$pasta,0777);
			
			$targetFile = "uploads/".$pasta ."/". $imagem_nome;
			move_uploaded_file($tempFile,$targetFile);
			
			// Carrega a imagem enviada
			$original = WideImage::load($targetFile);
			
			// Redimensiona a imagem original para 1024x768 caso ela seja maior que isto e salva
			$original->resizeDown($this->maxWidth,$this->maxHeight)->saveToFile($targetFile);
			// Cria a miniatura (thumbnail)
			$thumbnail = "";
			if($makeThumb)
			{
				$thumb = str_replace("$imagem_nome", "thumb_$imagem_nome", $targetFile); // Substitui a extensão 
				$thumbnail = "thumb_".$imagem_nome;
				$original->resizeDown(200,200)->saveToFile($thumb);
			}
			
			$result = array("imagem" => $imagem_nome, "thumb" => $thumbnail);
			return $result;
		}
	}
	
	public function deletarImagem($img,$pasta)
	{
		$foto = "uploads/".$pasta ."/". $img;
		unlink($foto);
	}
}
?>