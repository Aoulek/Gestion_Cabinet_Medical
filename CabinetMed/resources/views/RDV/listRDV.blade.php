@extends('nav_Med')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></style>
    <title>Ordonnance</title>
</head>
<body>
   


<section>
  <!--for demo wrap-->
  <h1>Gestion des RDVs</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th class="table-primary"> ID </th>
          <th class="table-secondary"> Nom_Patient </th>
          <th class="table-success"> Prenom_Patient </th>
          <th class="table-primary"> Tel_Patient </th>
          <th class="table-warning"> date </th>
          <th class="table-info"> heure </th>
          <th class="table-danger"> action </th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="1" border="0">
      <tbody>
               @foreach($listR as $RDV)
                <tr>
                

                    <td>{{$RDV['id']}}</td>
                    <td>{{$RDV['nom_pat']}}</td>
                    <td>{{$RDV['prenom_pat']}}</td>
                    <td>{{$RDV['tel_pat']}}</td>
                    <td>{{$RDV['date']}}</td>
                    <td>{{$RDV['heure']}}</td>

                    <td>
                    <button type="button" class="btn btn-success" id="load1" style="color:white" ><a href="{{route('/edit',$RDV->id)}}" class="btn btn-success ps-0 py-0 pe-0">edit</a></button>
                    <button type="button" class="btn btn-danger" id="load1" style="color:white"  ><a href="\delete?id={{$RDV['id']}}" class="btn btn-danger ps-0 py-0 pe-0">delete</a></button>
                    </td>
                </tr>
                @endforeach
     
      </tbody>
    </table>
    
  </div>

</section>



{{-- 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
  </head>
  
  <hr>

  <body> 
  <div class="container my-5" > 
    <form action="/save" method="get" >
    <div style="width:500px " class="mb-3">
      <label  class="form-label">Nom_patient</label>
      <input type="text" class="form-control"   name="nom_patient" autocomplete="off" >
    </div>
    <div  style="width:500px " class="mb-3">
      <label  class="form-label">Prenom_patient</label>
      <input type="text" class="form-control"   name="prenom_patient" autocomplete="off">
    </div>

    <div  style="width:500px " class="mb-3">
      <label  class="form-label">Tel_patient</label>
      <input type="text" class="form-control"   name="tel_patient" autocomplete="off">
    </div>
  
    <div  style="width:500px " class="mb-3">
      <label  class="form-label">Date</label>
      <input type="date" class="form-control"  name="date" autocomplete="off" >
    </div>
  
    <div  style="width:500px " class="mb-3">
      <label  class="form-label">Heure</label>
      <input type="time" class="form-control"  name="heure" autocomplete="off" >
    </div>
    <button type="submit" class="btn btn-primary" name="submit">enregistrer</button>
   </form>
  </div>

<br>
<br>  --}}




<div style="margin:3em;">
  <button type="button" class="btn btn-primary btn-lg " id="load1"  data-loading-text=" Processing Order"><i class='fa fa-circle-o-notch fa-spin'></i><a href="/RDVRDV" style="color:white" class="btn btn-sm me-2">Ajouter un RDV</a>
  </button>

  </div>
@endsection
<!-- follow me template -->





<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}



.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}</style>
<script>// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();</script>



</div>
</body>
</html>
