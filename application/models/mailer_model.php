<?php

/*
 * mailer model for Our-ecommerce
 * developer-iqbal hossain;
 * date-19/11/15
 */

class Mailer_Model extends CI_Model {

    function sendeEmail($data, $templateName) {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['admin_full_name']);
        $this->email->to($data['to_address']);
        $this->email->bcc('iqbl.cse2015@gmail.com'); 
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailscripts/' . $templateName, $data, true);
        //echo $body;exit;
        $this->email->message($body);
        // $this->email->send();
        $this->email->clear();
    }
}

?>
