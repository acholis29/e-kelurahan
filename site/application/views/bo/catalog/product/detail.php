<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
   $this->load->view("shared/_header");

?>
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container-fluid">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Detail 
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
                <a href="/bo/catalog/product">Product</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Detail</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="mt-content-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-diamond font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Product</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-pencil"></i> Edit </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-trash-o"></i> Delete </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-object-group"></i> Group </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-check-square"></i> Unit </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label>Group</label>
                                                <select class="bs-select form-control" data-live-search="true" name="cmb_group" id="cmb_group">
                                                    <optgroup label="Picnic">
                                                    <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </optgroup>
                                                    <optgroup label="Camping">
                                                        <option>Tent</option>
                                                        <option>Flashlight</option>
                                                        <option>Toilet Paper</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label>Brand</label>
                                                <select class="bs-select form-control input-sm" data-live-search="true" name="cmb_brand" id="cmb_brand" >
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                    <option>Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label>SKU / Barcode</label>
                                                <input type="text" class="form-control " name="t_sku" id="t_sku" placeholder="Barcode"> 
                                            </div>                                      
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="t_product" id="t_product"  class="form-control " placeholder="Product Name"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label>Unit</label>
                                                <input type="text" name="t_note" id="t_unit" class="form-control " placeholder="Unit"> 
                                            </div>                                                                                   
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label>Min Stock</label>
                                                <input type="text" name="t_minstock" id="t_minstock" class="form-control " placeholder="Min Stock"> 
                                            </div> 
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label>Max Stock</label>
                                                <input type="text" name="t_maxstock" id="t_maxstock" class="form-control " placeholder="Max Stock"> 
                                            </div>                                       
                                        </div>
                                    </div>

                                    <div class="row">                                        
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <div class="mt-checkbox-inline">
                                                    <label class="mt-checkbox">
                                                        <input type="checkbox" id="chk_consignment" name="chk_consignment" checked="checked"> Consignment
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-checkbox">
                                                        <input type="checkbox" id="chk_public" name="chk_public" checked="checked"> Show in POS
                                                        <span></span>
                                                    </label>
                                                    <label class="mt-checkbox">
                                                        <input type="checkbox" id="chk_tax" name="chk_tax" > Free TAX
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Description Product</label>
                                        <textarea name="txt_note" id="txt_note" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-actions noborder">
                                        <button type="button" class="btn blue">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <i class="icon-wallet font-red-sunglo"></i>
                                    <span class="caption-subject bold uppercase">Price</span>
                                </div>
                                
                            </div>
                            <div class="portlet-body form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Price Buy</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <b>IDR</b>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Price Buy"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Price Sell</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <b>IDR</b>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Price Sell"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Comission</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <b>IDR</b>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Price Buy"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <div class="mt-checkbox-inline">
                                                    <label class="mt-checkbox">
                                                        <input type="checkbox" id="chk_dynamicprice" name="chk_dynamicprice" checked="checked"> Dynamic Price
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>



            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

<?php $this->load->view("shared/_footer"); ?>   