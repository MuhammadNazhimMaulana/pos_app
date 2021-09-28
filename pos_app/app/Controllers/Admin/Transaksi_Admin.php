<?php

namespace App\Controllers\Admin;

use TCPDF;
use App\Controllers\BaseController;
use App\Models\Transaksi_M;
use App\Models\Item_M;
use App\Entities\Transaksi_E;
use App\Models\Barang_M;

class Transaksi_Admin extends BaseController
{
    public function __construct()
    {
        // Memanggil Helper
        helper('form');

        // Memanggil Helper Angka
        helper('number');

        // Load Validasi
        $this->validation = \Config\Services::validation();

        // Load Session
        $this->session = session();
    }

    public function home()
    {
        $model = new Transaksi_M();

        $data = [
            'data_transaksi' => $model
        ];

        return view('Admin_View/Transaksi_View/home_transaksi', $data);  
    }

    public function read()
    {
        $model = new Transaksi_M();

        $data = [
            'data_transaksi' => $model->join('tbl_users', 'tbl_users.username = tbl_transaksi.nama_kasir')->paginate(10, 'transaksi'),
            'pager' => $model->pager,
        ];

        return view('Admin_View/Transaksi_View/read_transaksi', $data);
    }

    public function insert(){

        $data = $this->request->getPost();

                // Simpan data
                $model = new Transaksi_M();

               $transaction = new Transaksi_E();
                
               // Fill untuk assign value data kecuali gambar
               $transaction->fill($data);

               //Input
               $transaction->nama_kasir = $this->session->get('username');
               $transaction->tanggal_transaksi = date("Y-m-d");
               $transaction->waktu_transaksi = date("H:i:s");
               $transaction->created_at = date("Y-m-d H:i:s");

                $model->save($transaction);

                $id_transaksi = $model->insertID();

                $segments = ['Admin', 'Item_Admin', 'input', $id_transaksi];

                // Akan redirect ke /Admin/Rak_A/view/$id_barang
                return redirect()->to(site_url($segments));
  
    }

    public function check_out()
    {        
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        // Dapatkan Post
        $data_perubahan = $this->request->getPost();

        $transactions = new Transaksi_E();
        $transactions->id_transaksi = $id_transaksi;
        $transactions->fill($data_perubahan);

        //Input Harga
        $transactions->updated_at = date("Y-m-d H:i:s");

        $model->save($transactions);

        $segments = ['Admin', 'Transaksi_Admin', 'pembayaran', $id_transaksi];

        return redirect()->to(site_url($segments));
    }

    public function pembayaran()
    {
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        // Mendapatkan data Transaksi
        $transaksi = $model->join('tbl_users', 'tbl_users.username = tbl_transaksi.nama_kasir')->where('tbl_transaksi.id_transaksi', $id_transaksi)->first();

        $data = [
            'transaksi' => $transaksi,
        ];

            if ($this->request->getPost()) {
                $data_transaksi = $this->request->getPost();
                $this->validation->run($data_transaksi, 'transaksi_update');
                $errors = $this->validation->getErrors();

                if (!$errors) {
                    $transaksi = new Transaksi_E();
                    $transaksi->id_transaksi = $id_transaksi;
                    $transaksi->fill($data_transaksi);

                    //Ubah Keterangan
                    $transaksi->keterangan = 'Lunas';
                    $transaksi->updated_at = date("Y-m-d H:i:s");

                    $model->save($transaksi);

                    $segments = ['Admin', 'Transaksi_Admin', 'view', $id_transaksi];

                    return redirect()->to(site_url($segments));
                }

                $this->session->setFlashdata('errors', $errors);
            }

        return view('Admin_View/Transaksi_View/pembayaran_transaksi', $data);
    }

    public function view()
    {
        // Data Transaksi
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        // Mendapatkan data Transaksi
        $transaksi = $model->join('tbl_users', 'tbl_users.username = tbl_transaksi.nama_kasir')->where('tbl_transaksi.id_transaksi', $id_transaksi)->first();

        // Mendapatkan data Item
        $model_item = new Item_M();

        $items = $model_item->join('tbl_barang', 'tbl_barang.id_barang = tbl_item_transaksi.id_barang')->join('tbl_transaksi', 'tbl_transaksi.id_transaksi = tbl_item_transaksi.id_transaksi')->where('tbl_item_transaksi.id_transaksi', $id_transaksi)->findAll();

        // Total Pembayaran
        $total_bayar = $model_item->select('SUM(tbl_item_transaksi.total_item) AS jumlah')->get();

        $data = [
            'item' => $items,
            'transaksi' => $transaksi,
            'total' => $total_bayar->getResult(),
        ];

        return view('Admin_View/Transaksi_View/view_transaksi', $data); 
    }

    public function pdf()
    {
        // Data Transaksi
        $id_transaksi = $this->request->uri->getSegment(4);

        $model = new Transaksi_M();

        // Mendapatkan data Transaksi
        $transaksi = $model->join('tbl_users', 'tbl_users.username = tbl_transaksi.nama_kasir')->where('tbl_transaksi.id_transaksi', $id_transaksi)->first();

        // Mendapatkan data Item
        $model_item = new Item_M();

        $items = $model_item->join('tbl_barang', 'tbl_barang.id_barang = tbl_item_transaksi.id_barang')->join('tbl_transaksi', 'tbl_transaksi.id_transaksi = tbl_item_transaksi.id_transaksi')->where('tbl_item_transaksi.id_transaksi', $id_transaksi)->findAll();

        // Total Pembayaran
        $total_bayar = $model_item->select('SUM(tbl_item_transaksi.total_item) AS jumlah')->get();

        $data = [
            'item' => $items,
            'transaksi' => $transaksi,
            'total' => $total_bayar->getResult(),
        ];

        $html =  view('Admin_View/Transaksi_View/view_transaksi_pdf', $data);

        // Skrip menggunakan TCPDF
        $pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Muhammad Nazhim Maulana');
        $pdf->SetTitle('Invoice Pembelian Barang');
        $pdf->SetSubject('Invoice');

        // Menghilangkan garis header dan footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->addPage();

        // Output HTML
        $pdf->writeHTML($html, true, false, true, false, '');
		
        // Penting agar browser menampilkan pdf
        $this->response->setContentType('application/pdf');

        // Membuat dokumen pdf (F untuk write file di folder yang dipilih)
        $pdf->Output('Invoice_Transaksi.pdf', 'I');
    }
    
}
