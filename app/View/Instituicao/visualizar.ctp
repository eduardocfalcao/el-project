
<h4><?PHP echo "Dados Instituição"; ?></h4>

<h5>
	Nome:
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["nome"]; ?>
</p>

<h5>
	E-mail:
</h5>

<p>
	<?PHP echo $instituicao["Instituicao"]["email"]; ?>
</p>

<h5>
	Telefone:
</h5>

<p>
	<?PHP echo $instituicao["Instituicao"]["telefone"]; ?>
</p>

<h5>
	Telefone alternativo:
</h5>

<p>
	<?PHP echo $instituicao["Instituicao"]["telefoneAlternativo"]; ?>
</p>

<h5>
	Site:
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["site"]; ?>
</p>

<h5>
	Facebook:
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["facebook"]; ?>
</p>


<h5>
	Cidade:
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["cidade"]; ?>
</p>

<h5>
	uf:
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["uf"]; ?>
</p>

<h5>
	<?PHP echo "País"; ?>
</h5>
<p>
	<?PHP echo$instituicao["Instituicao"]["pais"]; ?>
</p>


<h5>
	<?PHP echo "Endereço"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["endereco"]; ?>
</p>



<h5>
	<?PHP echo "CNPJ"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["cnpj"]; ?>
</p>


<h5>
	<?PHP echo "Histórico"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["historico"]; ?>
</p>

<h5>
	<?PHP echo "Outras Informações"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["outrasInformacoes"]; ?>
</p>

<h5>
	<?PHP echo "Inscrição concluída?"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Instituicao"]["concluido"] ? "Sim" : "Não"; ?>
</p>



<h4><?PHP echo "Responsável"; ?></h4>

<h5>
	<?PHP echo "Nome"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Responsavel"]["nome"]; ?>
</p>


<h5>
	<?PHP echo "Cargo"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Responsavel"]["cargo"]; ?>
</p>


<h5>
	<?PHP echo"RG"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Responsavel"]["rg"]; ?>
</p>

<h5>
	<?PHP echo "CPF"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Responsavel"]["cpf"]; ?>
</p>


<h5>
	<?PHP echo "Outras Informações"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Responsavel"]["outrasInformacoes"]; ?>
</p>


<h4><?PHP echo "Projeto"; ?></h4>

<h5>
	<?PHP echo "Nome"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["nome"]; ?>
</p>


<h5>
	<?PHP echo "Reponsável"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["responsavel"]; ?>
</p>


<h5>
	<?PHP echo"equipe"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["equipe"]; ?>
</p>

<h5>
	<?PHP echo "Data de início"; ?>
</h5>
<p>
	<?PHP if(empty($instituicao["Projeto"]["periodoInicio"]) == false)
			echo date("d/m/Y", strtotime($instituicao["Projeto"]["periodoInicio"])); 
	?>
</p>


<h5>
	<?PHP echo "Data de termíno"; ?>
</h5>
<p>
	<?PHP  if(empty($instituicao["Projeto"]["periodoFim"]) == false)
			echo date("d/m/Y", strtotime($instituicao["Projeto"]["periodoFim"])); 
	?>
</p>


<h5>
	<?PHP echo "Objetivos"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["objetivos"]; ?>
</p>
<h5>
	<?PHP echo"Justificativa"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["justificativa"]; ?>
</p>

<h5>
	<?PHP echo "Metodologia"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["metodologia"]; ?>
</p>


<h5>
	<?PHP echo "Atividades"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["atividades"]; ?>
</p>
<h5>
	<?PHP echo"resultados"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["resultados"]; ?>
</p>

<h5>
	<?PHP echo "Plano de utilização do recurso(Prèmio)"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["planoUtilizacaoRecurso"]; ?>
</p>

<h5>
	<?PHP echo"Estado do projeto"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["uf"]; ?>
</p>

<h5>
	<?PHP echo "Município do projeto"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["municipio"]; ?>
</p>

<h5>
	<?PHP echo "Crianças envolvidas"; ?>
</h5>
<p>
	<?PHP echo $instituicao["Projeto"]["criancasEnvolvidas"]; ?>
</p>


<h4><?PHP echo "Anexos"; ?></h4>


<p>
     <?php if(!empty($instituicao["Instituicao"]["anexo1"])) {  
    	 	echo $this->Html->link($instituicao["Instituicao"]["anexo1"], 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["anexo1"])); 
		}	        								 
    ?>
</p>

<p>
     <?php if(!empty($instituicao["Instituicao"]["anexo2"])) {  
    	 	echo $this->Html->link($instituicao["Instituicao"]["anexo2"], 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["anexo2"])); 
		}	        								 
    ?>
</p>

<p>
     <?php if(!empty($instituicao["Instituicao"]["anexo3"])) {  
    	 	echo $this->Html->link($instituicao["Instituicao"]["anexo3"], 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["anexo3"])); 
		}	        								 
    ?>
</p>

<p>
     <?php if(!empty($instituicao["Instituicao"]["anexo4"])) {  
    	 	echo $this->Html->link($instituicao["Instituicao"]["anexo4"], 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["anexo4"])); 
		}	        								 
    ?>
</p>


<h4><?PHP echo "Documentos"; ?></h4>

<p>
	<?php if(!empty($instituicao["Instituicao"]["documentoEstatuto"])) { ?>
		<?php echo $this->Html->link("Cópia do ato constitutivo ou estatuto da instituição em vigor", 
									 array("controller" => 'Instituicao', "action" => "download", 
									 $instituicao["Instituicao"]["documentoEstatuto"])); ?>
	<?php } ?>
</p>

<p>
	<?php if(!empty($instituicao["Instituicao"]["documentoAssembleia"])) { ?>
		<?php echo $this->Html->link("Cópia da ata da última assembleia da entidade", 
									 array("controller" => 'Instituicao', "action" => "download", 
									 $instituicao["Instituicao"]["documentoAssembleia"])); ?>
	<?php } ?>	
</p>

<p>  	
    <?php if(!empty($instituicao["Instituicao"]["documentoContratoSocial"])) { ?>
    	<?php echo $this->Html->link("Contrato Social", 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["documentoContratoSocial"])); ?>
    <?php } ?>
	
</p>


<p>
	<?php if(!empty($instituicao["Instituicao"]["documentoCnpj"])) { ?>
    	<?php echo $this->Html->link("Cópia do CNPJ", 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["documentoCnpj"])); ?>
    <?php } ?>
</p>

<p>
	 <?php if(!empty($instituicao["Instituicao"]["documentoComprovanteEndereco"])) {  
	        	 	echo $this->Html->link("Cópia do comprovante de endereço da instituição", 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoComprovanteEndereco"])); 
				}	        								 
	        ?>
</p>

<p>
	  <?php if(!empty($instituicao["Instituicao"]["documentoResponsavelRg"])) {  
	        	 	echo $this->Html->link("Cópia do RG do responsável legal", 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoResponsavelRg"])); 
				}	        								 
	        ?>
</p>

<p>
	 <?php if(!empty($instituicao["Instituicao"]["documentoResponsavelCpf"])) {  
    	 	echo $this->Html->link("Cópia do CPF do responsável legal", 
    								 array("controller" => 'Instituicao', "action" => "download", 
    								 $instituicao["Instituicao"]["documentoResponsavelCpf"])); 
		}	        								 
     ?>
</p>

<p>
	 <?php if(!empty($instituicao["Instituicao"]["documentoDeclaracao"])) {  
        	 	echo $this->Html->link("Declaração de envio dos documentos.", 
        								 array("controller" => 'Instituicao', "action" => "download", 
        								 $instituicao["Instituicao"]["documentoDeclaracao"])); 
			}	        								 
     ?>
</p>