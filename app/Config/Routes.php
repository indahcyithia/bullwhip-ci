<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Admin', 'Admin::index');
$routes->get('/Manajer', 'Manajer::index');
$routes->get('/Gudang', 'Gudang::index');
$routes->get('/Pesanan', 'Pesanan::index');
$routes->get('/Produksi', 'Produksi::index');

$routes->get('/Produksi/Pesanan', 'Produksi::daftarPesanan');
$routes->get('/Produksi/ProsesPesanan', 'Produksi::prosesPesanan');
$routes->get('/Produksi/SavePesanan', 'Produksi::saveProduksi');
$routes->get('/Produksi/DaftarProduksi', 'Produksi::daftarProduksi');

$routes->get('/Pesanan/DaftarPesanan', 'Pesanan::daftarPesanan');
$routes->get('/Pesanan/TambahPesanan', 'Pesanan::tambahPesanan');
$routes->get('/Pesanan/SavePesanan', 'Pesanan::savePesanan');
$routes->get('/Pesanan/BarangBaru', 'Pesanan::barangBaru');

$routes->get('/Gudang/Stock', 'Gudang::stock');
$routes->get('/Gudang/Pengambilan', 'Gudang::pengambilan');
$routes->get('/Gudang/TambahPengambilan', 'Gudang::tambahPengambilan');
$routes->get('/Admin/SavePengambilan', 'Admin::savePengambilan');

$routes->get('/Manajer/Dashboard', 'Manajer::dashboard');

$routes->get('/Admin/Bagian', 'Admin::bagian');
$routes->get('/Admin/TambahBagian', 'Admin::tambahBagian');
$routes->get('/Admin/SaveBagian', 'Admin::saveBagian');
$routes->get('/Admin/UbahBagian', 'Admin::ubahBagian');
$routes->get('/Admin/updateBagian', 'Admin::updateBagian');

$routes->get('/Admin/Barang', 'Admin::barang');
$routes->get('/Admin/TambangBarang', 'Admin::tambahBarang');
$routes->get('/Admin/SaveBarang', 'Admin::saveBarang');
$routes->get('/Admin/deleteBarang', 'Admin::deleteBarang');
$routes->get('/Admin/UbahBarang', 'Admin::ubahBarang');
$routes->get('/Admin/updateBarang', 'Admin::updateBarang');

$routes->get('/Admin/Pegawai', 'Admin::pegawai');
$routes->get('/Admin/TambahPegawai', 'Admin::tambahPegawai');
$routes->get('/Admin/SavePegawai', 'Admin::savePegawai');
$routes->get('/Admin/UbahPegawai', 'Admin::ubahPegawai');
$routes->get('/Admin/updatePegawai', 'Admin::updatePegawai');
$routes->get('/Admin/deletePegawai', 'Admin::deletePegawai');

$routes->get('/Home/Login', 'Home::login');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
