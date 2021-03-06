<?php


$this->group(['middleware' => 'auth' , 'namespace' => 'Admin', 'prefix' => 'admin'] ,  function(){
    $this->get('/' , 'AdminController@index')->name('admin.home');
    $this->get('balance' , 'BalanceController@index')->name('admin.balance');

    $this->get('deposit' , 'BalanceController@deposit')->name('balance.deposit');
    $this->post('deposit' , 'BalanceController@depositStore')->name('deposit.store');

    $this->get('saque' , 'BalanceController@saque')->name('balance.saque');
    $this->post('saque' , 'BalanceController@saqueStore')->name('saque.store');

    $this->get('transferencia' , 'BalanceController@Transferencia')->name('balance.transferencia');
    $this->post('transferencia-confirmar' , 'BalanceController@confirmarTransferencia')->name('transferencia.confirmar');
    $this->post('transferencia' , 'BalanceController@TransferenciaStore')->name('transferencia.store');

    $this->get('historicos', 'BalanceController@Historicos')->name('admin.balance.historicos');
    $this->any('historicos-pesquisa', 'BalanceController@PesquisaHistoricos')->name('historico.pesquisa');

    $this->get('meu-perfil', 'UserController@Perfil')->name('perfil')->middleware('auth');
    $this->post('atualizar-perfil', 'UserController@PerfilAtualizar')->name('perfil.atualizar')->middleware('auth');

});


Route::get('/', 'SiteController@index')->name('home');

Auth::routes();

