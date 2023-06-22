@extends('admin.master')

@section('title',"ALL-CATEGORY")

@section('dashboardContent')
	
	<!-- Content body start -->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>

                        <!-- <span class="ml-1">June 22, 2023 - June 22, 2023</span> -->
                    
                        <!-- Dynamic Date Start -->

                            <span class="ml-1">
                                <?php
                                    $year = date('l, j F Y');
                                    echo "$year";
                                ?>
                            </span>

                       <!-- Dynamic Date End -->

                    </div>
                </div>

                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Go Back</a></li>
                    </ol>
                </div>

            </div>

            <div class="container-fluid">
                <div class="row justify-content-between mb-3">
					<div class="col-12 ">
						<!-- <h2 class="page-heading">Hi,Welcome Back!</h2>
						<p class="mb-0">Your elite-commerce admin dashboard</p> -->
                        <div class="row">
                        <div class="col-12">
                            <h3 class="page-heading">Category CRUD</h3>
                            <p class="mb-0">Create, Read, Update, Delete</p>
                        </div>

                        <div class="col-xl-8 col-xxl-12 offset-xl-2">
                            <div class="card">
                                <div class="card-body">
                                
                                    <div class="mb-1">
                                        <a href="#" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#exampleModal">Add New</a>
                                    </div>

                                    <span class="card-title">All Category</span>

                                    <br><br><br>
                                    <div class="table-responsive">

                                        <table class="table table-hover table-bordered table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category Name</th>                                                    
                                                    <th>Category Icon</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kolor Tea Shirt For Man</td>     
                                                    <td class="color-primary">$21.56</td>                                     
                                                    <td>January 22</td>
                                                    
                                                    <!-- <td>
                                                        <span class="badge badge-primary">Edit</span>
                                                        <span class="badge badge-danger">Delete</span>
                                                    </td> -->
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>                                        
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Kolor Tea Shirt For Women</td>  
                                                    <td class="color-success">$55.32</td>                                          
                                                    <td>January 30</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Blue Backpack For Baby</td>     
                                                    <td class="color-danger">$14.85</td>                                          
                                                    <td>January 25</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>4</th>
                                                    <td>Kolor Tea Shirt For Man</td>     
                                                    <td class="color-primary">$21.56</td>                                     
                                                    <td>January 22</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>                                       
                                                </tr>
                                                <tr>
                                                    <th>5</th>
                                                    <td>Kolor Tea Shirt For Women</td>  
                                                    <td class="color-success">$55.32</td>                                          
                                                    <td>January 30</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>6</th>
                                                    <td>Blue Backpack For Baby</td>     
                                                    <td class="color-danger">$14.85</td>                                          
                                                    <td>January 25</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>7</th>
                                                    <td>Kolor Tea Shirt For Man</td>     
                                                    <td class="color-primary">$21.56</td>                                     
                                                    <td>January 22</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>                                       
                                                </tr>
                                                <tr>
                                                    <th>8</th>
                                                    <td>Kolor Tea Shirt For Women</td>  
                                                    <td class="color-success">$55.32</td>                                          
                                                    <td>January 30</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>9</th>
                                                    <td>Blue Backpack For Baby</td>     
                                                    <td class="color-danger">$14.85</td>                                          
                                                    <td>January 25</td>
                                                    
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>

        </div>
    </div>
    <!-- Content body end -->


    <!-- Modal Start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="post" action="" enctype="multipart/form-data">
                    @csrf

                        <div class="modal-body">               
                            <div class="mb-3">
                                <label for="catname" class="col-form-label">Category Name:</label>
                                <input type="text" class="form-control" id="catname">
                                <small id="emailHelp" class="form-text text-muted">Add a unique category name</small>
                            </div>
                            <div class="mb-3">
                                <label for="caticon" class="col-form-label">Category Icon:</label>
                                <input type="file" class="form-control-file" id="caticon">
                                <small id="emailHelp" class="form-text text-muted">Add a unique category icon</small>
                            </div>              
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    <!-- Modal End -->


@endsection