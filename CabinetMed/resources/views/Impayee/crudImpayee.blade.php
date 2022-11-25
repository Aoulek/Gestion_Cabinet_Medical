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
    <title>Impayee</title>
</head>
<body>
   


<section>
  <!--for demo wrap-->
  <h1>Gestion des impayees</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
            <th>id</th>
            <th>Nom patient</th>
            <th>Prenom Patient</th>
            <th>tel</th>
            <th>montant_APS</th>
            <th>montant_RS</th>
            <th>operations</th>
            
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="1" border="0">
      <tbody>
                @foreach($Impayee as $Impayee)
                <tr>
                

                    <td>{{ $Impayee->id }}</td>
                    <td>{{ $Impayee->nom_pat }}</td>
                    <td>{{ $Impayee->prenom_pat }}</td>
                    <td>{{ $Impayee->tel_pat }}</td>
                    <td>{{ $Impayee->montant_APS }}</td>
                    <td>{{ $Impayee->montant_RS }}</td>
                  
                    <td>
                    <button type="button" class="btn btn-success" id="load1" style="color:white" ><a href="{{route('Impayee.Modify',$Impayee->id)}}" class="btn btn-success ps-0 py-0 pe-0">edit</a></button>
                    <button type="button" class="btn btn-danger" id="load1" style="color:white"  ><a href="{{route('Impayee.delete',$Impayee->id)}}" class="btn btn-danger ps-0 py-0 pe-0">delete</a></button>
                    </td>
                </tr>
                @endforeach
     
      </tbody>
    </table>
    
  </div>

</section>


<div style="margin:3em;">
<button type="button" class="btn btn-primary btn-lg " id="load1"  data-loading-text=" Processing Order"><i class='fa fa-circle-o-notch fa-spin'></i><a href="{{route('Impayee.create')}} " style="color:white" class="btn btn-sm me-2">Ajouter </a>
</button>

<!--<button type="button" class="btn btn-primary btn-lg" id="load2" style="color:white" data-loading-text=" Processing Order"><i class='fa fa-spinner fa-spin '></i><a href="{{route('Ordonnance.create')}}"class="btn btn-sm ms-2">Revenir en arrière </a>
</button>-->
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