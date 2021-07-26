<?php
require_once (dirname(__DIR__, 2) . '/vendor/autoload.php');

use Source\Support\Email;

if ($_POST) {
	$subjectForm = 'Solicitação de Orçamento - Website ' . SITE['name'];
	$nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$surnameForm = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
	$companyForm = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
	$whatsappForm = filter_var($_POST['whatsapp'], FILTER_SANITIZE_STRING);
	$mailForm = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	$eventForm = filter_var($_POST['event'], FILTER_SANITIZE_STRING);
	$dateForm = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
	$addressForm = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
	$peopleForm = filter_var($_POST['people'], FILTER_SANITIZE_STRING);
	$hourForm = filter_var($_POST['hour'], FILTER_SANITIZE_STRING);
	$invoiceForm = filter_var($_POST['invoice'], FILTER_SANITIZE_STRING);
	$messageForm = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

	if(!$companyForm == null){
        $company = "<p><strong>Empresa:</strong><br>" . $companyForm ."</p>";
	}else{
	    $company = '';
    }

	$date = date_create($dateForm);
	$dateFormat = date_format($date, "d/m/Y");
}

	$email = new Email();

	$email->add(
		$subjectForm,
		"<h1>Mensagem de Contato - Site " . SITE['name'] ."</h1>
                    <br>
                    <p>Olá " . SITE['name'] . ",</p>
                    <p>Me chamo <strong>{$nameForm} {$surnameForm}</strong>, gostaria de solicitar um orçamento para o meu evento.</p>
                    <br>
                    <h2>Aqui estão os meus dados para o contato:</h2>
                    <p><strong>E-mail:</strong><br>{$mailForm}</p>
                    <p><strong>Whatsapp:</strong><br>{$whatsappForm}</p>
                    {$company}
                    <br>
                    <h2>Aqui estão os dados do evento:</h2>
                    <p><strong>Tipo:</strong><br>{$eventForm}</p>
                    <p><strong>Data:</strong><br>{$dateFormat}</p>
                    <p><strong>Endereço:</strong><br>{$addressForm}</p>
                    <p><strong>Quantidade de pessoas:</strong><br>{$peopleForm}</p>
                    <p><strong>Horário:</strong><br>{$hourForm}</p>
                    <p><strong>Emissão de nota:</strong><br>{$invoiceForm}</p>
                    <br>
                    <p><strong>Observações:</strong><p>
                    <p>$messageForm</p>",
		SITE['name'],
        MAIL['from_email']
	)->send($nameForm, $mailForm);

	if (!$email->error()) {
		echo
			'<script>
	            $(document).ready(function(){
	                swal("'.$nameForm.'", "Sua mensagem foi enviada.  \n Obrigado pelo contato!", "success");
                });
        	</script>';
	} else {
		echo
		'<script>        
	         $(document).ready(function(){swal("Ops...", "Houve um erro ao enviar a mensagem, tente novamente!", "error");
	         });
         </script>';
	}
