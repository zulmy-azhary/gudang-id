<?php 

class Report extends Controller{
    public function __construct(){
        $this->checkSessionId();
    }
    public function itemReport(){
        $data['title'] = 'Item Report';
        $this->view('report/itemreport', $data);
    }
    public function transReport(){
        $data['title'] = 'Transaction Report';
        $this->view('report/transreport', $data);
    }
}