<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImageController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // อื่น ๆ ที่คุณต้องการทำใน constructor
    }

    public function uploadImage() {
        $config['upload_path']   = './assets/img/ProblemCondition/'; // ตำแหน่งที่ต้องการบันทึกรูปภาพ
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 2048; // ขนาดสูงสุดของไฟล์ (KB)
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
            $url = base_url('assets/img/ProblemCondition/' . $data['file_name']);

            // ทำตามที่คุณต้องการเพิ่มเติม (เช่น บันทึกลงฐานข้อมูล, ส่งค่าอื่น ๆ)

            echo json_encode(['url' => $url, 'name' => $data['file_name']]);
        } else {
            echo json_encode(['error' => $this->upload->display_errors()]);
        }
    }

    // ฟังก์ชันอื่น ๆ ที่คุณต้องการ
}
