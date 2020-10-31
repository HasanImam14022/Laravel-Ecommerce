<!DOCTYPE html>
<html lang="en">

<head>



  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
  

  <!-- Custom fonts for this template-->
  <link href="{{asset('/')}}admin_asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 

  <!-- Custom styles for this template-->
  <link href="{{asset('/')}}admin_asset/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  

  <!-- Custom styles for this page -->
  <link href="{{asset('/')}}admin_asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!--panel link -->
  <style>
       .panel{
	margin-bottom:20px;
	background-color:#fff;
	border:1px solid transparent;
  border-radius:4px;
	-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);
	box-shadow:0 1px 1px rgba(0,0,0,.05)
}

.panel-body {
   padding:15px;
  
   border:1px solid transparent

}
 
.panel-heading {
	 padding:10px 15px;
   border-bottom:1px solid green;
   border-top:1px solid green;
   border-top-left-radius:3px;
   text-align:center;
	 border-top-right-radius:3px
}

.panel-heading>.dropdown .dropdown-toggle{
 	color:inherit
}

 .panel-title{
 		margin-top:0;
 		margin-bottom:0;
 		font-size:16px;
 		color:inherit
 	}
 	.panel-title>.small,
 	.panel-title>.small>a,
 	.panel-title>a,
 	.panel-title>small,
 	.panel-title>small>a {
 		color:inherit
  }
     
 	.panel-footer{
 		padding:10px 15px;
 		background-color:#f5f5f5;
 		border-top:1px solid #ddd;
 		border-bottom-right-radius:3px;
 		border-bottom-left-radius:3px
     }
     
 	.panel>.list-group,
 	.panel>.panel-collapse>.list-group{
 		margin-bottom:0
     }
     
 	.panel>.list-group .list-group-item,
 	.panel>.panel-collapse>.list-group .list-group-item{
 		border-width:1px 0;
 		border-radius:0
     }
     
 	.panel>.list-group:first-child .list-group-item:first-child,
 	.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{
 		border-top:1 px green;
 		border-top-left-radius:3px;
     border-top-right-radius:3px
  }

 	.panel>.list-group:last-child .list-group-item:last-child,
 	.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
 		border-bottom:1px green;
 		border-bottom-right-radius:3px;
 		border-bottom-left-radius:3px
     }
     
 	.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{
 		border-top-left-radius:1px green;
 		border-top-right-radius:1px green
   }
   
 	.panel-heading+.list-group .list-group-item:first-child{
 		border-top-width:0
     }
     
 	.list-group+.panel-footer{
 		border-top-width:0
     }
     
 	.panel>.panel-collapse>.table,
 	.panel>.table,
 	.panel>.table-responsive>.table{
 		margin-bottom:0
     }
     
 	.panel>.panel-collapse>.table caption,
 	.panel>.table caption,
 	.panel>.table-responsive>.table caption{
 		padding-right:15px;
 		padding-left:15px
      }
      
 	.panel>.table-responsive:first-child>.table:first-child,
 	.panel>.table:first-child{
 		border-top-left-radius:3px;
 		border-top-right-radius:3px
     }
     
 	.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
 	.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
 	.panel>.table:first-child>tbody:first-child>tr:first-child,
 	.panel>.table:first-child>thead:first-child>tr:first-child{
 		border-top-left-radius:3px;
 		border-top-right-radius:3px
       }
       
 	.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
 	.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
 	.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
 	.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
 	.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
 	.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
 	.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
 	.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{
 		border-top-left-radius:3px
     }
     
 		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
 		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
 		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
 		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
 		.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
 		.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
 		.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
 		.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{
 			border-top-right-radius:3px
       }
       
 	.panel>.table-responsive:last-child>.table:last-child,
 	.panel>.table:last-child{
 			border-bottom-right-radius:3px;
 			border-bottom-left-radius:3px
       }
       
 	.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
 	.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
 	.panel>.table:last-child>tbody:last-child>tr:last-child,
 	.panel>.table:last-child>tfoot:last-child>tr:last-child{
 			border-bottom-right-radius:3px;
 			border-bottom-left-radius:3px
       }
       
 	.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
 	.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
 	.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
 	.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
 	.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
 	.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
 	.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
 	.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{
 			border-bottom-left-radius:3px
       }
       
 	.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
 	.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
 	.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
 	.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
 	.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
 	.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
 	.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child
 	.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{
 				border-bottom-right-radius:3px
         }
         
 	.panel>.panel-body+.table,
 	.panel>.panel-body+.table-responsive,
 	.panel>.table+.panel-body,
 	.panel>.table-responsive+.panel-body{
 				border-top:1px solid #ddd
         }
         
 	.panel>.table>tbody:first-child>tr:first-child td,
 	.panel>.table>tbody:first-child>tr:first-child th{
 					border-top:0
           }
           
 	.panel>.table-bordered,
 	.panel>.table-responsive>.table-bordered{
 					border:0
           }
           
 	.panel>.table-bordered>tbody>tr>td:first-child,
 	.panel>.table-bordered>tbody>tr>th:first-child,
 	.panel>.table-bordered>tfoot>tr>td:first-child,
 	.panel>.table-bordered>tfoot>tr>th:first-child,
 	.panel>.table-bordered>thead>tr>td:first-child,
 	.panel>.table-bordered>thead>tr>th:first-child,
 	.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
 	.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
 	.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
 	.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
 	.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
 	.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{
 			border-left:0
       }
       
 	.panel>.table-bordered>tbody>tr>td:last-child,
 	.panel>.table-bordered>tbody>tr>th:last-child,
 	.panel>.table-bordered>tfoot>tr>td:last-child,
 	.panel>.table-bordered>tfoot>tr>th:last-child,
 	.panel>.table-bordered>thead>tr>td:last-child,
 	.panel>.table-bordered>thead>tr>th:last-child,
 	.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
 	.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
 	.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
 	.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
 	.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
 	.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{
 			border-right:0
       }
       
 	.panel>.table-bordered>tbody>tr:first-child>td,
 	.panel>.table-bordered>tbody>tr:first-child>th,
 	.panel>.table-bordered>thead>tr:first-child>td,
 	.panel>.table-bordered>thead>tr:first-child>th,
 	.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
 	.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
 	.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
 	.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{
 				border-bottom:0
         }
         
    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{
 				border-bottom:0
         }
         
 	.panel>.table-responsive{
 				margin-bottom:0;border:0
 				}
 	
 	.panel-group .panel{
 				margin-bottom:0;border-radius:4px
         }
         
    .panel-group .panel+.panel{
 				margin-top:5px
         }
         
 	.panel-group .panel-heading{
 				border-bottom:0
         }
         
 	.panel-group .panel-heading+.panel-collapse>.list-group,
 	.panel-group .panel-heading+.panel-collapse>.panel-body{
 				border-top:1px solid #ddd
         }
         
 	.panel-group .panel-footer{
 				border-top:0
         }
         
 	.panel-group .panel-footer+.panel-collapse .panel-body{
 				border-bottom:1px solid #ddd
       }
       

 	.panel-default{
 				border-color:#ddd
         }
         
 	.panel-default>.panel-heading{
 				color:#333;
 				background-color:#f5f5f5;
 				border-color:#ddd
         }
         
 	.panel-default>.panel-heading+.panel-collapse>.panel-body{
 				border-top-color:#ddd
         }
         
 	.panel-default>.panel-heading .badge{
 					color:#f5f5f5;
 					background-color:#333
           }
           
 	.panel-default>.panel-footer+.panel-collapse>.panel-body{
 				border-bottom-color:#ddd
         }
         
 	.panel-primary{
 				border-color:#337ab7
         }
         
 	.panel-primary>.panel-heading{
 				color:#fff;
 				background-color:#337ab7;
         border-color:#337ab7
        }
         
 	.panel-primary>.panel-heading+.panel-collapse>.panel-body{
 				border-top-color:#337ab7
 				}
 	.panel-primary>.panel-heading .badge{
 				color:#337ab7;background-color:#fff
         }
         
 	.panel-primary>.panel-footer+.panel-collapse>.panel-body{
 				border-bottom-color:#337ab7
         }
         
 	.panel-success{
 				border-color:#d6e9c6
         }
         
 	.panel-success>.panel-heading{
 				color:#3c763d;
 				background-color:#dff0d8;
 				border-color:#d6e9c6
         }
         
 	.panel-success>.panel-heading+.panel-collapse>.panel-body{
 				border-top-color:#d6e9c6
         }
         
 	.panel-success>.panel-heading .badge{
 				color:#dff0d8;
 				background-color:#3c763d
         }
         
 	.panel-success>.panel-footer+.panel-collapse>.panel-body{
 				border-bottom-color:#d6e9c6
         }
         
 	.panel-info{
 				border-color:#bce8f1
 			    }
 	.panel-info>.panel-heading{
 				color:#31708f;
 				background-color:#d9edf7;
 				border-color:#bce8f1
         }
         
 	.panel-info>.panel-heading+.panel-collapse>.panel-body{
 				border-top-color:#bce8f1
       }
       
 	.panel-info>.panel-heading .badge{
 				color:#d9edf7;
 				background-color:#31708f
         }
         
 	.panel-info>.panel-footer+.panel-collapse>.panel-body{
 				border-bottom-color:#bce8f1
         }
         
 	.panel-warning{
 				border-color:#faebcc
         }
         
 	.panel-warning>.panel-heading{
 					color:#8a6d3b;
 					background-color:#fcf8e3;
 					border-color:#faebcc
           }
           
 	.panel-warning>.panel-heading+.panel-collapse>.panel-body{
 				border-top-color:#faebcc
         }
         
 	.panel-warning>.panel-heading .badge{
 				color:#fcf8e3;
 				background-color:#8a6d3b
         }
         
 	.panel-warning>.panel-footer+.panel-collapse>.panel-body{
 				border-bottom-color:#faebcc
         }
         
 	.panel-danger{
 				border-color:#ebccd1
         }
         
 	.panel-danger>.panel-heading{
 				color:#a94442;
 				background-color:#f2dede;
 				border-color:#ebccd1
         }
         
 	.panel-danger>.panel-heading+.panel-collapse>.panel-body{
 				border-top-color:#ebccd1
         }
         
 	.panel-danger>.panel-heading .badge{
 				color:#f2dede;
 				background-color:#a94442
         }
         
 	.panel-danger>.panel-footer+.panel-collapse>.panel-body{
 				border-bottom-color:#ebccd1
 			    }
 			 

  </style>
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><marquee>Welcome to Dashboard</marquee></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
          <span>Category Module</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{URL::to('/add-category')}}">Add Category</a>
            <a class="collapse-item" href="{{URL::to('/manage-category')}}">Manage Category</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      

      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-cog"></i>
          <span>Brand Module</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{URL::to('/add-brand')}}">Add Brand</a>
            <a class="collapse-item" href="{{URL::to('/manage-brand')}}">Manage Brand</a>
           
            
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      
      <hr class="sidebar-divider">
      <!-- Heading -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-cog"></i>
          <span>Product Module</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{URL::to('/add-product')}}">Add Product</a>
            <a class="collapse-item" href="{{URL::to('/manage-product')}}">Manage Product</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities1">
          <i class="fas fa-fw fa-cog"></i>
          <span>Order Management</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="{{URL::to('/manage-order')}}">Manage Order</a>
            <a class="collapse-item" href="#">Manage Slider</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php
                $admin_name = Session::get('admin_name');
                if(isset($admin_name))
                {
                  echo $admin_name;
                }
                
                ?>
                </span>
                <i class="fa fa-power-off" aria-hidden="true" style="color:red;font-size:30px;" ></i>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

       

         @yield('body')

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="{{URL::to('/logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Update Modal-->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color:green">From Category Update</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Category Updated SuccessFully.</div>
        
      </div>
    </div>
  </div>

 

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/')}}admin_asset/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('/')}}admin_asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/')}}admin_asset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('/')}}admin_asset/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('/')}}admin_asset/js/demo/chart-area-demo.js"></script>
  <script src="{{asset('/')}}admin_asset/js/demo/chart-pie-demo.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('/')}}admin_asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/')}}admin_asset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{asset('/')}}admin_asset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('/')}}admin_asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('/')}}admin_asset/js/demo/datatables-demo.js"></script>

</body>

</html>
