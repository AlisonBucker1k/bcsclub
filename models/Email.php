<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMAILER\PHPMailer\Exception;

class Email extends Model{
    public function send($data, $hora, $minutos, $dados_consulta, $dados_cliente, $dados_clinica){
        $mail = new PHPMailer(true);
        // echo $minutos;exit;
        try{

            $mail->isSMTP();
            $mail->Host = 'mail.bsbclub.com.br';
            $mail->SMTPAuth = 'true';
            $mail->SMTPSecure = 'ssl';
            $mail->Username = 'medical@bsbclub.com.br';
            $mail->Password = 'VehzHQW38D*J';
            $mail->Port = 465;

            $mail->setFrom('medical@bsbclub.com.br', 'BSB Medical'); // De onde é enviado, Assunto;
            $mail->addAddress($dados_cliente['email']); // Para onde vai ser enviado;
            $mail->isHTML(true); // Hablita o uso de HTML;
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Alison, Sua consulta foi marcada! Abra este email para ver o resumo da sua consulta'; // Assunto
            $mail->Body = '
                Olá, '.$dados_cliente['nome'].'.<br>
                Sua consulta na clinica'. $dados_clinica['nome_fant'] .' foi agendada!<br>
                <strong>Data e hora da consulta: </strong><br>'.
                // date('d/m/Y H:i', strtotime($dados_consulta['data_marcado']))
                date('d/m/Y', strtotime($data)).' ÁS '.$hora.':'.$minutos
                .'<br> 
                <strong>Endereço:</strong>'.
                'Rua: '.$dados_clinica['rua'].' Bairro: '.$dados_clinica['bairro'].' Número: '.$dados_clinica['numero'].', '.$dados_clinica['cidade'].'<br>'.
                $dados_clinica['cep'].'
            '; // Corpo do Email
            $mail->AltBody = "Este é o texto alternativo do email";
            
            if($mail->send()){
                return true;
            }else{
                echo "Ocorreu um erro durante o Envio :X";
            }

            

        }catch(Exception $e){
            echo "Ocorreu um erro ao enviar o email{$mail->ErrorInfo}";
            exit;
        }
    }
}