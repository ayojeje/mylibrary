 <?php
require_once("includes/config.php");
require_once("includes/header.php");
require_once("includes/lms_css.php");
?>




 <!-- Patient Profile Modal -->
 <div class="modal fade" id="patientProfileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true" enctype="multipart/form-data">
     <div class="modal-dialog">

         <body>

             <div id="tableView">
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header">
                             <div class="d-flex align-items-center">
                                 <h4 class="card-title">Add Row</h4>
                                 <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                     data-bs-target="#addRowModal">
                                     <i class="fa fa-plus"></i>
                                     Add Row
                                 </button>
                             </div>
                         </div>
                         <div class="card-body">
                             <!-- Modal -->
                             <div class="modal fade" id="viewBooksModal" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true"
                                 enctype="multipart/form-data">
                                 <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header border-0">
                                             <h5 class="modal-title">
                                                 <span class="fw-mediumbold"> New</span>
                                                 <span class="fw-light"> Row </span>
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                 aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <p class="small">
                                                 Create a new row using this form, make sure you
                                                 fill them all
                                             </p>
                                             <form id="viewBookForm">
                                                 <div class="row">
                                                     <div class="col-sm-12">
                                                         <div class="form-group form-group-default">
                                                             <label>Name</label>
                                                             <input id="name" type="text" class="form-control"
                                                                 placeholder="name" />
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6 pe-0">
                                                         <div class="form-group form-group-default">
                                                             <label>Genre</label>
                                                             <input id="genre" type="text" class="form-control"
                                                                 placeholder="genre" />
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                         <div class="form-group form-group-default">
                                                             <label>Author</label>
                                                             <input id="author" type="text" class="form-control"
                                                                 placeholder="author" />
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-6">
                                                         <div class="mb-3"><label for="image"
                                                                 class="form-label">Image</label>:</label>
                                                             <input type="file" class="form-control" id="image"
                                                                 name="image" accept="image/*" />
                                                         </div>
                                                     </div>
                                                 </div>
                                             </form>
                                         </div>
                                         <div class="modal-footer border-0">
                                             <button type="submit" id="addRowButton" class="btn btn-primary">
                                                 Add
                                             </button>
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                 Close
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="table-responsive">
                                 <table id="viewBook" class="display table table-striped table-hover">
                                     <thead>
                                         <tr>
                                             <th>Name</th>
                                             <th>Genre</th>
                                             <th>Author</th>
                                             <th style="width: 10%">Image</th>
                                         </tr>
                                     </thead>
                                     <tbody id="viewBookTbody">

                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <?php require_once("includes/lms_js.php");?>

             <script>
             // let dataTable = new DataTable('#registerPatient');
             new DataTable('#viewBooks', {
                 scrollX: true,
                 scrollY: 200
             });
             </script>
             <script src="viewBooks.js"></script>

         </body>