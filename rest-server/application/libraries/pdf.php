<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;
class pdf extends Dompdf {
    /**
     * PDF filename
     * @var String
     */
    public $filename;
    public function __construct()
    {
        parent::__construct();
        $this->filename="laporan.pdf";
    }
    /**
     * Get an instance of CodeIgniter
     * @access protected
     * @return void
     */
    protected function ci(){
        return get_instance();
    }

    public function load_view($view, $data=array()){
        $html=$this->ci()->load->view($view,$data,TRUE);
        $this->load_html($html);
        $this->render();
        $this->stream($this->filename,array("Attachment"=>false));
    }
}

/* End of file pdf.php */

?>