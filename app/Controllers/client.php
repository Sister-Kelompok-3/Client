<?php
class client
{
    private $host = "localhost";
    private $dbname = "dbs_server1";
    private $conn;
    private $options, $api;

    // koneksi ke database mysql di client
    private $driver = "mysql";
    private $user = "root";
    private $password = "";
    private $port = "3306";

    public function __construct()
    {    // set uri SOAP server
        //$this->options = array('location' => 'http://localhost/soap/soap-server/server.php','uri' => 'http://localhost');
        $this->options = array('location' => 'http://localhost:8080/Komputer_server1/Server_1/app/Controllers/server.php', 'uri' => 'http://localhost:8080');

        // buat objek baru dari class SOAP Client
        $this->api = new SoapClient(NULL, $this->options);


        // koneksi database lokal client
        try {
            if ($this->driver == 'mysql') {
                $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
            } elseif ($this->driver == 'pgsql') {
                $this->conn = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->password");
            }
        } catch (PDOException $e) {
            echo "Koneksi gagal";
        }
    }
    public function create_barang($nama_barang, $satuan, $stok)
    {
        $this->api->tambah_mahasiswa($nama_barang, $satuan, $stok);
        unset($nama_barang, $satuan, $stok);
    }
    public function daftar_barang_server()
    {    // memanggil method/fungsi yang ada di server dan dimasukkan ke variabel $data
        $data = $this->api->daftar_barang();

        // mengembalikan data
        return $data;

        // menghapus variabel dari memory
        unset($data);
    }
}
