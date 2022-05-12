<?php

namespace App\Models;

use CodeIgniter\Model;


class BarangModel extends Model
{
    protected $table = 'barang';

    protected $allowedFields = [
        'nama_bagian'
    ];

    public function getBarang()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM barang ORDER BY nama_barang ASC');
        $results = $query->getResultArray();
        return $results;
    }
    public function getStockBarang()
    {
        $db = \Config\Database::connect();
        $query   = $db->query("SELECT
        barang.nama_barang,
        SUM(DISTINCT produksi.jumlah_produksi) as total_produksi,
        SUM(DISTINCT pengambilan.jumlah_pengambilan) as total_pengambilan,
        (
            SUM(DISTINCT produksi.jumlah_produksi) -
            SUM(DISTINCT 	pengambilan.jumlah_pengambilan)
        ) as stok_barang
    FROM
        barang
    JOIN produksi USING (id_barang)
    JOIN pengambilan USING (id_barang)
    GROUP BY nama_barang");
        $results = $query->getResultArray();
        return $results;
    }
    public function getBarangManajer()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT
        barang.nama_barang,
        ROUND(STDDEV(jumlah_pesanan), 3) AS s_order,
        ROUND(
            AVG(pemesanan.jumlah_pesanan),
            3
        ) AS mean_order,
        ROUND(STDDEV(jumlah_produksi), 3) AS s_demand,
        ROUND(
            AVG(produksi.jumlah_produksi),
            3
        ) AS mean_demand,
        ROUND(
            (
                STDDEV(jumlah_pesanan) / AVG(jumlah_pesanan)
            ),
            3
        ) AS cv_order,
        ROUND(
            (
                STDDEV(jumlah_produksi) / AVG(jumlah_produksi)
            ),
            3
        ) AS cv_demand,
        ROUND(
            (
                (
                    STDDEV(jumlah_pesanan) / AVG(jumlah_pesanan)
                ) / (
                    STDDEV(jumlah_produksi) / AVG(jumlah_produksi)
                )
            ),
            3
        ) AS BE,
        produksi.lead_time,
        ROUND(
            (
                1 + ((2 * produksi.lead_time) / 30) + (
                    (2 * produksi.lead_time ^ 2) / (30 ^ 2)
                )
            ),
            3
        ) AS parameter,
        ROUND(
            (
                (
                    STDDEV(jumlah_pesanan) / AVG(jumlah_pesanan)
                ) / (
                    STDDEV(jumlah_produksi) / AVG(jumlah_produksi)
                )
            ) > 1 + ((2 * produksi.lead_time) / 30) + (
                (2 * produksi.lead_time ^ 2) / (30 ^ 2)
            ),
            3
        ) AS Bullwhip_Effect
        FROM
            barang
        INNER JOIN pemesanan ON pemesanan.id_barang = barang.id_barang
        INNER JOIN produksi ON produksi.id_barang = pemesanan.id_barang
        GROUP BY
            barang.nama_barang, produksi.lead_time');
        $results = $query->getResultArray();
        return $results;
    }
    public function hapusBarang($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->delete(['id_barang' => $id]);
        return true;
    }
    public function tambahBarang($nama)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->insert(['nama_barang' => $nama]);
        return true;
    }
    public function ubahBarang($id, $nama)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('barang');
        $builder->set('nama_barang', $nama);
        $builder->where('id_barang', $id);
        $builder->update();
        return true;
    }
    public function cariBarang($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM barang WHERE id_barang = ? ";
        $results = $db->query($sql, $id)->getResultArray();

        return $results;
    }
}
