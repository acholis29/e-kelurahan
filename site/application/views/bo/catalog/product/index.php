<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
   $this->load->view("shared/_header");

?>
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container-fluid">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Daftar
                <small>Produk</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar">
            <!-- BEGIN THEME PANEL -->
            <div class="btn-group btn-theme-panel">
                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-settings"></i>
                </a>
                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>Other master for product</h3>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <ul class="theme-colors">
                                        <li id="li_msgroup_product" class="theme-color theme-color-default" >                                            
											<i class="fa fa-gears"></i> Category / Group
                                        </li>
                                        <li class="theme-color theme-color-blue-hoki" >
                                            <i class="fa fa-gears"></i> Brand
                                        </li>
                                        <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                            <i class="fa fa-gears"></i> Unit
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-sm-6 col-xs-12 seperator">
                            <h3>LAYOUT</h3>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
        </div>
        <!-- END PAGE TOOLBAR -->
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
                <span>Produk</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="mt-content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-home"></i>
                                <span class="caption-subject font-dark bold uppercase">Produk</span>
                            </div>
                            <div class="actions">                                
                                <a class="btn btn-circle btn-icon-only btn-default" href="/bo/catalog/product/new"><i class="icon-doc"></i></a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title="Produk Baru"> </a>

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


<?php $this->load->view("bo/catalog/product/_modal_group"); ?>  