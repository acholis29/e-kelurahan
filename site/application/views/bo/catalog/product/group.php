<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
   $this->load->view("shared/_header");

?>
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container-fluid">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Group 
                <small>Produk</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
       
    </div>
</div>
<!-- END PAGE HEAD-->





<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container-fluid">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="/bo">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="/bo/katalog/produk">Produk</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Group</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="mt-content-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-home"></i>
                                <span class="caption-subject font-dark bold uppercase">Produk</span>
                            </div>
                            <div class="actions">                                
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <div class="row number-stats margin-bottom-30">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                        <tr class="uppercase">
                                            <th colspan="2"> Hotel Name </th>
                                            <th> Earnings </th>
                                            <th> CASES </th>
                                            <th> CLOSED </th>
                                            <th> RATE </th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Brain</a>
                                        </td>
                                        <td> $345 </td>
                                        <td> 45 </td>
                                        <td> 124 </td>
                                        <td>
                                            <span class="bold theme-font">80%</span>
                                        </td>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                    </div>

                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

<?php $this->load->view("shared/_footer"); ?>   