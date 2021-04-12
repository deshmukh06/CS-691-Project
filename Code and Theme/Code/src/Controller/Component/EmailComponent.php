<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\View\View;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EmailComponent extends Component
{
    public function sendEmail($to, $subject, $attachments=[], $viewVariables, $template = 'email/html/default', $layout = 'email/html/default', $cc = "") {
        try {
            $mailer = new PHPMailer();
            $mailer->isSMTP();
            $mailer->Host = EMAIL_HOST;
            $mailer->SMTPAuth = EMAIL_SMTP_AUTH;
            $mailer->Username = EMAIL_USERNAME;
            $mailer->Password = EMAIL_PASSWORD;

            $mailer->From = EMAIL_FROM;
            $mailer->FromName = env('APP_NAME', EMAIL_FROM_NAME);
            $mailer->SMTPSecure = EMAIL_SMTP_SECURE;
            $mailer->Port = EMAIL_PORT;
            $mailer->addAddress($to);

            if (!empty($cc)) {
                $cc_emails = explode(',', $cc);

                foreach ($cc_emails as $cc_email) {
                    $mailer->addCC($cc_email);
                }
            }

            //$mailer->addBCC('hvora@aptbusinessservices.com');
            $mailer->IsHTML(true);

            $mailer->Subject = $subject;
            if(!empty($attachments) && count($attachments) > 0) {
                foreach ($attachments as $attachment) {
                    $mailer->addAttachment($attachment['path'], $attachment['name']);
                }
            }
            $view = new View();
            $content = $view->setTemplate($template)->setLayout($layout)->set($viewVariables);
            $mailer->Body    = $content->render();
            $mailer->AltBody = $content->render();

            if($mailer->send()) {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $exception) {
            return false;
        } catch (Exception $exception) {
            return false;
        }
    }
}
