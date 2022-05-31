<?php

class Members extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->viewFolder = "members_v";
        $this->load->model("member_model");
    }


    public function index()
    {
        /* Tablodan verilerin getirilmesi */
        $items = $this->member_model->get_all();
        /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function newForm()
    {

        /* View yapısının kurulması */
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function insert()
    {
        $data = array(

            "email"     => $this->input->post("email")

        );
        $insert = $this->member_model->insert($data);


        if ($data) {
            echo "Başarılı";
        } else {
            echo "Başarısız";
        }
    }


    public function delete($id)
    {
        $delete = $this->member_model->delete(array(
            "id" => $id
        ));
        if ($delete) {

            echo "Silme Başarılı";
        } else {
            echo "Silinemedi";
        }
    }

    public function update($id)
    {
       // echo $this->input->post("email");
        //die();
        $data = array(
            'email' => $this->input->post("email"),
            'isActive' => $this->input->post("active")
        );

        $id = $this->member_model->update(array(
            "id" => $id
        ), $data);

        if ($id) {
            echo 'basarılı';
        } else {
            echo 'basarılı değil';
        }
    }
}
