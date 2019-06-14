<?php include("header.php"); ?>

  <h1><i class="fa fa-address-book"></i>          REGISTRATION</h1><hr>
    
     
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="card" style="text-align: center;">  
<div class="row">
  <div class="column" style="background-color:  #7a00cc;">
    <h1><a href="registeremployee.php" alt="Google">EMPLOYEES</h1>
  </div>
  <div class="column" style="background-color: #8a00e6;">
  <h1><a href="registerclient.php" alt="Google">CLIENTS</h1>
  </div>
  <div class="column" style="background-color:#9900ff;">
  <h1><a href="registerproject.php" alt="Google">PROJECTS</h1>
  </div>
  <div class="column" style="background-color: #9900ff;">
    <h1><a href="registercategory.php" alt="Google">CATEGORIES</h1>
  </div>
</div>
 
  <hr>
</div>
<?php include("footer.php"); ?>