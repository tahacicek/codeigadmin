<?php

class Categories extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->viewFolder = "categories";
        $this->load->model("categories_model");
    }


    public function index()
    {
        /* Tablodan verilerin getirilmesi */
        $items = $this->categories_model->get_all();
        /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "add";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }
    public function table()
    {
        /* Tablodan verilerin getirilmesi */
        $items = $this->categories_model->get_all();
        /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function insert()
    {
        $data = array(

            "AnaKategori"     => $this->input->post("ana"),
            "ÜstKategori"     => $this->input->post("üst"),
            "AltKategori"     => $this->input->post("alt")

        );

        $insert = $this->categories_model->insert($data);

        if ($data) {
            redirect('/categories/table');
        }
    }

    public function delete($id)
    {
        $delete = $this->categories_model->delete(array(
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
            'AnaKategori' => $this->input->post("ana"),
            'ÜstKategori' => $this->input->post("üst"),
            'AltKategori' => $this->input->post("alt"),

        );

        $id = $this->categories_model->update(array(
            "id" => $id
        ), $data);

        if ($id) {
            echo 'basarılı';
        } else {
            echo 'basarılı değil';
        }
    }
}
